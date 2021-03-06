
<div class="page-title pdd-bottom-9">
    <h4></h4>
</div>

<div class="row">

    <!--Document-->
    <div class="col-md-12 col-sm-12 col-xm-12">
        <div class="card">
            <div class="card-heading">
                <h4 class="card-title inline-block pdd-top-5">Documents </h4>
<!--                <a href="" class="btn btn-default pull-right no-mrg">All Documents</a>-->
            </div>
            <div class="pdd-horizon-20 pdd-vertical-5 mrg-btm-30">
                <div class="overflow-y-auto relative scrollable" style="max-height: 381px">
                    <table class="table table-lg table-hover">
                        <tbody>
                        <tr>
                            <td width="10%">
                                <span class="ei ei-file-word font-size-25"> </span>
                            </td>
                            <td>

                                <div class="mrg-top-0">
                                    <span>BUP Sports Schedule</span>
                                </div>
                            </td>
                            <td>
                                <div class="mrg-top-0">
                                    <span>8 May 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="10%">
                                <span class="ei ei-file-power-point font-size-25"> </span>
                            </td>

                            <td>

                                <div class="mrg-top-0">
                                    <span>Event BUP</span>
                                </div>
                            </td>

                            <td>
                                <div class="mrg-top-0">
                                    <span>17 Feb 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td width="10%">
                                <span class="ei ei-file-pdf font-size-25"> </span>
                            </td>

                            <td>

                                <div class="mrg-top-0">
                                    <span>Event Sports BUP</span>
                                </div>
                            </td>


                            <td>
                                <div class="mrg-top-0">
                                    <span>2 Feb 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="10%">
                                <span class="ei ei-file-excel font-size-25"> </span>
                            </td>

                            <td>

                                <div class="mrg-top-0">
                                    <span>Class Routine BUP</span>
                                </div>
                            </td>



                            <td>
                                <div class="mrg-top-0">
                                    <span>11 Jan 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td width="10%">
                                <span class="ei ei-file-word font-size-25"> </span>
                            </td>

                            <td>

                                <div class="mrg-top-0">
                                    <span>Class Holiday</span>
                                </div>
                            </td>

                            <td>
                                <div class="mrg-top-0">
                                    <span>11 Jan 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
                                </div>
                            </td>
                        </tr>

                        <tr>

                            <td width="10%">
                                <span class="ei ei-file-excel font-size-25"> </span>
                            </td>

                            <td>

                                <div class="mrg-top-0">
                                    <span>List of Work</span>
                                </div>
                            </td>

                            <td>
                                <div class="mrg-top-0">
                                    <span>13 Jan 2017</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative mrg-top-0">
                                    <a href="#" class="" data-toggle="modal" data-target="#modal-document">Preview</a>
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

<div class="modal fade" id="modal-document">
    <div class="modal-dialog modal-document" role="document">
        <div class="modal-content">
            <object type="application/pdf" class="modal-lg" data="<?php echo base_url(); ?>assets/documents/tasklist.pdf" height="550"/>

            <div class="modal-body">

                <div class="padding-15">

                    <!--                    <div class="row">-->
                    <!--                        <div class="col-md-12">-->
                    <!---->
                    <!--                            <h4 class="card-title mrg-btm-30">Information This Audio File</h4>-->
                    <!--                            <ul class="list arrow bullet-danger">-->
                    <!--                                <li>Upload By Admin</li>-->
                    <!--                                <li>Uploaded 2-2-2018</li>-->
                    <!--                                <li>Category : BUP EVENT</li>-->
                    <!--                            </ul>-->
                    <!---->
                    <!--                        </div>-->
                    <!--                    </div>-->
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
