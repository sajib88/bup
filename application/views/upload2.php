<div class="page-title">
    <h4>Upload Contents</h4>
</div>



<div class="row">

    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" class="col-md-12 col-sm-12 col-xm-12" action="" method="POST" enctype="multipart/form-data">

        <div class="col-md-7 col-sm-7 col-xm-12 no-pdd-left">
            <div class="card">
                <div class="card-block">
                    <div class="card-title">
                        <h5>Single or Batch Upload</h5>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 no-pdd-left no-pdd-right txt-al-center">

                        <label class="col-md-12 col-sm-12 col-xs-12 brdr-dash-e5eaf3 make_point ht-450 txt-al-center ver-mid pdd-top-145">
                            <input type="file" name="fileToUpload" id="fileToUpload[]" multiple />
                            <i class="ti-cloud-up font-size-90"></i><p class="font-size-20"><span class="brdr-top-e5eaf3">Drag and drop</span></p>
                        </label>

                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-12">
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

                        <div class="col-md-12 pdd-top-20 no-pdd-left">
                            <!-- The table listing the files available for upload/download -->
                            <table id="dt-opt" class="table table-lg table-hover dataTable no-footer brdr-top-e5eaf3" role="grid" aria-describedby="dt-opt_info">
                                <tbody class="files"></tbody>
                            </table>
                        </div>
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

                </div>
            </div>
        </div>


        <div class="col-md-5 col-sm-5 col-xm-12 no-pdd-right">
            <div class="card">
                <div class="card-block">
                    <div class="card-title">
                        <h5>Set Attributes</h5>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 no-pdd-left no-pdd-right">
                        <div class="form-group">
                            <label>Content Name</label>
                            <input placeholder="Enter Content Name" class="form-control" type="text">
                        </div>

                        <div class="form-group row">
                            <label for="form-1-5" class="col-md-12 col-sm-12 col-xs-12 control-label">Description</label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" rows="2" id="form-1-5"></textarea>
                            </div>
                        </div>

                        <label>Tagging:</label>
                        <select id="selectize-tags-1" name="person" multiple class="item-info">
                            <!--                                <option value="" disabled selected>Select a person...</option>-->
                            <!--                                <option value="1">Adam</option>-->
                            <!--                                <option value="2" selected>Amalie</option>-->
                            <!--                                <option value="3">Estefanía</option>-->
                            <!--                                <option value="4">Adrian</option>-->
                            <!--                                <option value="5">Wladimir</option>-->
                            <!--                                <option value="6">Samantha</option>-->
                            <!--                                <option value="7">Nicole</option>-->
                            <!--                                <option value="8" selected>Michael</option>-->
                        </select>

                        <label>Category:</label>
                        <select id="selectize-group">
                            <option value="">Select Category...</option>
                            <optgroup label="Climbing">
                                <option value="pitons">Pitons</option>
                                <option value="cams">Cams</option>
                                <option value="nuts">Nuts</option>
                                <option value="bolts">Bolts</option>
                                <option value="stoppers">Stoppers</option>
                                <option value="sling">Sling</option>
                            </optgroup>
                        </select>

                        <label>Events:</label>
                        <select id="selectize-tags-2" name="person" multiple class="item-primary">
                            <option value="1" selected>Adam</option>
                            <option value="2">Amalie</option>
                            <option value="3" selected>Estefanía</option>
                            <option value="4">Adrian</option>
                            <option value="5" selected>Wladimir</option>
                            <option value="6">Samantha</option>
                            <option value="7" selected>Nicole</option>
                            <option value="8">Michael</option>
                        </select>

                        <label>Recording Date:</label>
                        <div class="timepicker-input input-icon form-group">
                            <i class="ti-time"></i>
                            <input type="text" class="form-control datepicker-1" placeholder="Datepicker" data-provide="datepicker">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 txt-al-right no-pdd-right">

                        <button type="reset" class="btn btn-warning btn-md cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel upload</span>
                        </button>

                        <button type="submit" class="btn btn-primary btn-md" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start upload</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </form>

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
                <button class="btn btn-primary btn-xs start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
<!--                    <span>Start</span>-->
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning btn-xs cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
<!--                    <span>Cancel</span>-->
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
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

<?php
// --- define plugin js
$UploadPlug = array(
    '/assets/js/upload/js/vendor/jquery.ui.widget.js',
    'n/js/tmpl.min.js',
    'n/js/load-image.all.min.js',
    'n/js/canvas-to-blob.min.js',
    'n/js/jquery.blueimp-gallery.min.js',
    'n/js/jquery.iframe-transport.js',
    'n/js/jquery.fileupload.js',
    'n/js/jquery.fileupload-process.js',
    'n/js/jquery.fileupload-image.js',
    'n/js/jquery.fileupload-audio.js',
    'n/js/jquery.fileupload-video.js',
    'n/js/jquery.fileupload-validate.js',
    'assets/js/upload/js/jquery.fileupload-ui.js',
    'assets/js/upload/js/main.js'

//    'assets/bower_components/jquery/dist/jquery.min.js',
//    'assets/bower_components/popper.js/dist/umd/popper.min.js',
//    'assets/bower_components/bootstrap/dist/js/bootstrap.js',
//    'assets/bower_components/PACE/pace.min.js',
//    'assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
//    'assets/js/app.js',
//    'assets/bower_components/selectize/dist/js/standalone/selectize.min.js',
//    'assets/bower_components/moment/min/moment.min.js',
//    'assets/bower_components/bootstrap-daterangepicker/daterangepicker.js',
//    'assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
//    'assets/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js',
//    'assets/bower_components/summernote/dist/summernote.min.js',
//    'assets/js/forms/form-elements.js'

);

//---- define page javascript
//$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/audio.js");

require_once ('footer.php');

?>







