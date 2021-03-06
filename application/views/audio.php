
<div class="page-title pdd-bottom-9">
    <h4></h4>
</div>

<div class="row">

    <!--Audio-->
    <div class="col-md-12 col-sm-12 col-xm-12">

        <div class="card">
            <div class="card-heading">
                <h4 class="card-title inline-block pdd-top-5">Audios</h4>
<!--                <a href="" class="btn btn-default pull-right no-mrg">All Audios</a>-->
            </div>
            <div class="pdd-horizon-20 pdd-vertical-5 mrg-btm-30">
                <div class="overflow-y-auto relative scrollable" style="max-height: 381px">
                    <table class="table table-lg table-hover">
                        <tbody>
                        <tr>

                            <td>
                                <audio id="music3" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>

                            <td width="15%">
                                <div class="relative mrg-top-0">
                                    <a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <audio id="music4" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>

                            <td width="15%">
                                <div class="relative mrg-top-0">
                                    <a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <audio id="music5" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>

                            <td width="15%">
                                <div class="relative mrg-top-0">
                                    <a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <audio id="music6" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>

                            <td width="15%">
                                <div class="relative mrg-top-0">
                                    <a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td>
                                <audio id="music7" preload="metadata">
                                    <source src="<?php echo base_url(); ?>assets/audio/SampleAudio_0.4mb.mp3">
                                </audio>
                            </td>

                            <td width="15%">
                                <div class="relative mrg-top-0">
                                    <a href="#" data-toggle="modal" data-target="#modal-sound" class="btn btn-info btn-sm">Preview</a>
                                </div>
                            </td>
                        </tr>




                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

</div>

<style>
    .smallvjs{
        width: 105px !important;
        height: 65px  !important;
    }
    .video-js {
        width: 100% !important;
    }
    .imageblok{
        padding: 66px;
    }

</style>

<div class="modal fade" id="modal-sound">
    <div class="modal-dialog modal-sound" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="padding-15">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="card-title mrg-btm-30">Information This Audio File</h4>
                            <ul class="list arrow bullet-danger">
                                <li>Upload By Admin</li>
                                <li>Uploaded 2-2-2018</li>
                                <li>Category : BUP EVENT</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function call_modal(file_name)
    {
//        var url = '<?php //echo base_url(); ?>//assets/video/' + file_name;
//        alert(file_name);
//        video.pause();
//        $('#play_video').attr('src', url);
        $('#modal-lg').modal('show');
//        video.load();
//        video.play();

    }

</script>

<?php
// --- define plugin js
$mtPagePlugins = array(
//        'assets/bower_components/datatables/media/js/jquery.dataTables.js',
//        'assets/js/table/data-table.js',
        //'assets/js/dashboard/bootstrap.min.js',
        'assets/js/video/video.js',
        'assets/js/video/videojs-ie8.min.js',
        'assets/js/image/ekko-lightbox.js',
        'assets/js/image/ekko-lightbox.js.map',
        'assets/bower_components/audio/src/js/jquery.mkhplayer.js'

);

//---- define page javascript
$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/lightbox.js", "/page_javascript/dashboard/audio.js");

require_once ('footer.php');
?>
