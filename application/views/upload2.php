<div class="page-title">
    <h4>Upload Contents</h4>
</div>



<div class="row">


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
                    <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row fileupload-buttonbar">
                            <div class="col-lg-7">
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


                </div>

                <!-- The blueimp Gallery widget -->


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

                    <div class="col-md-12">
<!--                        <h4 class="card-title">Tagging</h4>-->
<!--                        <p>Add and remove items in any order without touching your mouse. Use your left/right arrow keys to move the caret (ibeam) between items. </p>-->
<!--                        <div class="mrg-top-40">-->
<!--                            <select id="selectize-tags-1" name="person" multiple="multiple" class="item-info selectized" tabindex="-1" style="display: none;"><option value="1" selected="selected">Adam</option><option value="ereaw" selected="selected">ereaw</option><option value="dfasdr" selected="selected">dfasdr</option></select><div class="selectize-control item-info multi"><div class="selectize-input items not-full has-options has-items" style=""><div class="item" data-value="1">Adam</div><div class="item" data-value="ereaw">ereaw</div><div class="item" data-value="dfasdr">dfasdr</div><input autocomplete="off" tabindex="" id="selectize-tags-1-selectized" style="width: 4px; opacity: 1; position: relative; left: 0px;" type="text"></div><div class="selectize-dropdown multi item-info" style="display: none; width: 374px; top: 38px; left: 0px; visibility: visible;"><div class="selectize-dropdown-content"><div class="option" data-selectable="" data-value="2">Amalie</div><div class="option" data-selectable="" data-value="3">Estef<span class="highlight">a</span>ní<span class="highlight">a</span></div><div class="option" data-selectable="" data-value="4">A<span class="highlight">d</span>rian</div><div class="option" data-selectable="" data-value="5">Wla<span class="highlight">d</span>imir</div><div class="option" data-selectable="" data-value="6">S<span class="highlight">a</span>m<span class="highlight">a</span>nth<span class="highlight">a</span></div><div class="option" data-selectable="" data-value="7">Nicole</div><div class="option" data-selectable="" data-value="8">Michael</div></div></div></div>-->
<!--                        </div>-->
<!--                        <div class="mrg-top-15">-->
<!--                            <select id="selectize-tags-2" name="person" multiple="multiple" class="item-primary selectized" tabindex="-1" style="display: none;"><option value="sdasfa" selected="selected">sdasfa</option><option value="1" selected="selected">Adam</option><option value="dfas" selected="selected">dfas</option><option value="rere" selected="selected">rere</option><option value="ere" selected="selected">ere</option></select><div class="selectize-control item-primary multi"><div class="selectize-input items not-full has-options has-items" style=""><div class="item" data-value="sdasfa">sdasfa</div><div class="item" data-value="1">Adam</div><div class="item" data-value="dfas">dfas</div><div class="item" data-value="rere">rere</div><div class="item" data-value="ere">ere</div><input autocomplete="off" tabindex="" id="selectize-tags-2-selectized" style="width: 4px; opacity: 1; position: relative; left: 0px;" type="text"></div><div class="selectize-dropdown multi item-primary" style="display: none; visibility: visible; width: 374px; top: 38px; left: 0px;"><div class="selectize-dropdown-content"><div class="option" data-selectable="" data-value="2"><span class="highlight">A</span>m<span class="highlight">a</span>lie</div><div class="option" data-selectable="" data-value="3">Estefanía</div><div class="option" data-selectable="" data-value="4"><span class="highlight">A</span>dri<span class="highlight">a</span>n</div><div class="option" data-selectable="" data-value="5">Wladimir</div><div class="option" data-selectable="" data-value="6">S<span class="highlight">a</span>m<span class="highlight">a</span>nth<span class="highlight">a</span></div><div class="option" data-selectable="" data-value="7">Nicole</div><div class="option" data-selectable="" data-value="8">Mich<span class="highlight">a</span>el</div></div></div></div>-->
<!--                        </div>-->
                    </div>

<!--                    <div class="row">-->
<!--                        <div class="col-md-10">-->
<!--                            <div class="mrg-top-40">-->
<!--                                <select id="selectize-dropdown" tabindex="-1" style="display: none;" class="selectized"><option value="" selected="selected"></option></select><div class="selectize-control single"><div class="selectize-input items not-full has-options"><input autocomplete="off" tabindex="" id="selectize-dropdown-selectized" placeholder="Select a person..." style="width: 103px;" type="text"></div></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="form-group">
                        <label>Category:</label>
                        <div class="selectize-control single">
                            <div class="selectize-input items not-full has-options" style="">
                                <input autocomplete="off" tabindex="" id="selectize-group-selectized" placeholder="Select gear..." style="width: 78px; opacity: 1; position: relative; left: 0px;" type="text">
                            </div>
                            <div class="selectize-dropdown single" style="display: none; width: 374px; top: 41px; left: 0px; visibility: visible;">
                                <div class="selectize-dropdown-content">
                                    <div class="optgroup" data-group="Climbing">
                                        <div class="optgroup-header">Climbing</div>
                                        <div class="option" data-selectable="" data-value="bolts">Bolts</div>
                                        <div class="option" data-selectable="" data-value="cams">Cams</div>
                                        <div class="option" data-selectable="" data-value="nuts">Nuts</div>
                                        <div class="option" data-selectable="" data-value="pitons">Pitons</div>
                                        <div class="option" data-selectable="" data-value="sling">Sling</div>
                                        <div class="option" data-selectable="" data-value="stoppers">Stoppers</div>
                                    </div>
                                    <div class="optgroup" data-group="Skiing">
                                        <div class="optgroup-header">Skiing</div>
                                        <div class="option" data-selectable="" data-value="poles">Poles</div>
                                        <div class="option" data-selectable="" data-value="skins">Skins</div>
                                        <div class="option" data-selectable="" data-value="skis">Skis</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label>Category:</label>
                    <select id="selectize-dropdown" tabindex="-1" style=" display: none;" class="selectized">
                        <option value="" selected="selected">abc</option>
                    </select>

                        <div class="selectize-control single">
                            <div class="selectize-input items not-full has-options">
                                <input autocomplete="off" tabindex="" id="selectize-dropdown-selectized" placeholder="Select a person..." style="width: 103px;" type="text">
                            </div>
                        </div>
<!--                    <select id="input-select" class="selectpicker width-100 mrg-btm-20">-->
<!--                        <option>Select Category</option>-->
<!--                    </select>-->
                    </div>

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



<?php
// --- define plugin js
$PagePlug = array(
    '/assets/js/upload/js/vendor/jquery.ui.widget.js',
    '/assets/js/upload/js/main.js',
    '/assets/js/upload/js/jquery.fileupload.js',
    '/assets/js/upload/js/jquery.fileupload-audio.js',
    '/assets/js/upload/js/jquery.fileupload-image.js',
    '/assets/js/upload/js/jquery.fileupload-video.js',
    '/assets/js/upload/js/jquery.fileupload-process.js',
    '/assets/js/upload/js/jquery.fileupload-ui.js',
    '/assets/js/upload/js/jquery.fileupload-validate.js',
    '/assets/js/upload/js/jquery.fileupload-jquery-ui.js',
    '/assets/js/upload/js/jquery.iframe-transport.js',

);



//---- define page javascript
//$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/audio.js");

require_once ('footer.php');

?>








