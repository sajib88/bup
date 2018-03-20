
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQuery-File-Upload-master/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQuery-File-Upload-master/css/jquery.fileupload.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jQuery-File-Upload-master/css/jquery.fileupload-ui.css" />

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
                <div class="col-md-12 col-sm-12 col-xs-12 brdr-dash-e5eaf3 ht-450 txt-al-center ver-mid pdd-top-145">
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />

<!--                            <a href="#">-->
<!--                                <i class="ti-cloud-up font-size-90"></i>-->
<!--                                <p class="font-size-20"><span class="brdr-top-e5eaf3">Drag and drop</span></p>-->
<!--                            </a>-->
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!--audio-->
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

<?php
// --- define plugin js
$mtPagePlugins = array('/assets/js/dashboard/bootstrap.min.js', '/assets/jQuery-File-Upload-master/js/main.js',
    'assets/jQuery-File-Upload-master/js/app.js',
    'assets/jQuery-File-Upload-master/js/jquery.fileupload.js', 'assets/jQuery-File-Upload-master/js/jquery.fileupload-audio.js',
    'assets/jQuery-File-Upload-master/js/jquery.fileupload-image.js', 'assets/jQuery-File-Upload-master/js/jquery.fileupload-video.js',
    'assets/jQuery-File-Upload-master/js/jquery.fileupload-process.js', 'assets/jQuery-File-Upload-master/js/jquery.fileupload-ui.js',
    'assets/jQuery-File-Upload-master/js/jquery.fileupload-validate.js', 'assets/jQuery-File-Upload-master/js/jquery.fileupload-jquery-ui.js',
    'assets/jQuery-File-Upload-master/js/jquery.iframe-transport.js');

//---- define page javascript
$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/audio.js");
?>
