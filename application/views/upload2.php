<div class="page-title">
    <h4>Upload Contents</h4>
</div>



<div class="row">

    <!--video-->
    <div class="col-md-7 col-sm-7 col-xm-12">
        <div class="card">
            <div class="card-block">
                <div class="card-title">
                    <h5>Single or Batch Upload</h5>
                </div>
<!--                <div class="col-md-12 col-sm-12 col-xs-12 brdr-dash-e5eaf3 ht-450 txt-al-center ver-mid pdd-top-145">-->
<!--                    <a href="#">-->
<!--                        <i class="ti-cloud-up font-size-90"></i>-->
<!--                        <p class="font-size-20"><span class="brdr-top-e5eaf3">Drag and drop</span></p>-->
<!--                    </a>-->
<!--                </div>-->

                <div class="col-md-12 col-sm-12 col-xs-12 brdr-dash-e5eaf3 ht-450 txt-al-center ver-mid pdd-top-145">
                    <!-- The file upload form used as target for the file upload widget -->
                    <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-12">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Add files...</span>
                                    <input type="file" name="files[]" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel upload</span>
                                </button>
                                <button type="button" class="btn btn-danger delete">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    <span>Delete</span>
                                </button>
                                <input type="checkbox" class="toggle">
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>
                    <br>
                </div>

                <!-- The blueimp Gallery widget -->
                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <!-- The template to display files available for upload -->
                <script id="template-upload" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                    <td>
                        <span class="preview"></span>
                    </td>
                    <td>
                        <p class="name">{%=file.name%}</p>
                        <strong class="error text-danger"></strong>
                    </td>
                    <td>
                        <p class="size">Processing...</p>
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                    </td>
                    <td>
                        {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                        {% } %}
                        {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                        {% } %}
                    </td>
                </tr>
                <script>{% } %}
                </script>

                <!-- The template to display files available for download -->
                <script id="template-download" type="text/x-tmpl">
                {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                    <td>
                        <span class="preview">
                            {% if (file.thumbnailUrl) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                            {% } %}
                        </span>
                    </td>
                    <td>
                        <p class="name">
                            {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                            {% } else { %}
                            <span>{%=file.name%}</span>
                            {% } %}
                        </p>
                        {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                        {% } %}
                    </td>
                    <td>
                        <span class="size">{%=o.formatFileSize(file.size)%}</span>
                    </td>
                    <td>
                        {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                        {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                        {% } %}
                    </td>
                </tr>
                {% } %}
                </script>

            </div>
        </div>
    </div>


    <div class="col-md-5 col-sm-5 col-xm-12">
        <div class="card">
            <div class="card-block">
                <div class="card-title">
                    <h5>Set Attributes</h5>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 no-pdd-left">
                    <label>Content Name:</label>
                    <input type="text" placeholder="Content Name" class="width-100 mrg-btm-20">

                    <label>Description:</label>
                    <textarea type="text" class="width-100 mrg-btm-20"></textarea>

                    <label>Tags:</label>
                    <input type="text" placeholder="Add Tags" class="width-100 mrg-btm-20">

                    <label>Category:</label>
                    <select id="input-select" class="selectpicker width-100 mrg-btm-20">
                        <option>Select Category</option>
                    </select>

                    <label>Events:</label>
                    <input type="text" placeholder="Events" class="width-100 mrg-btm-20">

                    <label>Recording Date:</label>
                    <input type="text" class="width-100 mrg-btm-20">

                    <div class="timepicker-input input-icon form-group">
                        <i class="ti-time"></i>
                        <input type="text" class="form-control datepicker-1" placeholder="Datepicker" data-provide="datepicker">
                    </div>

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 txt-al-right pdd-right-10">
                    <a href="#" class="btn btn-info" aria-hidden="true">Upload</a>
                </div>
            </div>
        </div>
    </div>

</div>


<!--<script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/main.js"></script>-->

<?php
// --- define plugin js
$PagePlug = array(
    '/assets/js/upload/js/vendor/jquery.ui.widget.js',
    '/assets/js/upload/js/main.js',
    '/assets/js/upload/js/app.js',
    '/assets/js/upload/js/jquery.fileupload.js',
    '/assets/js/upload/js/jquery.fileupload-audio.js',
    '/assets/js/upload/js/jquery.fileupload-image.js',
    '/assets/js/upload/js/jquery.fileupload-video.js',
    '/assets/js/upload/js/jquery.fileupload-process.js',
    '/assets/js/upload/js/jquery.fileupload-ui.js',
    '/assets/js/upload/js/jquery.fileupload-validate.js',
    '/assets/js/upload/js/jquery.fileupload-jquery-ui.js',
    '/assets/js/upload/js/jquery.iframe-transport.js'
);

//---- define page javascript
//$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/audio.js");

require_once ('footer.php');

?>








