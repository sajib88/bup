
<div class="page-title pdd-bottom-9">
    <h4></h4>
</div>

<div class="row">

    <!--Images-->
    <div class="col-md-12 col-sm-12 col-xm-12">
        <div class="card">

            <div class="card-heading">
                <h4 class="card-title inline-block pdd-top-5">Photos</h4>
<!--                <a href="" class="btn btn-default pull-right no-mrg">All Photos</a>-->
            </div>

            <a href="<?php echo base_url(); ?>assets/images/others/BUP-Campus.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="gallery-item" data-size="700x1000">
                <div class="overlay-dark bg" style="background-image: url('<?php echo base_url(); ?>/assets/images/others/BUP-Campus.jpg')">
                    <div class="card-block imageblok">
                        <div class="mrg-top-150">

                        </div>
                    </div>
                </div>
            </a>





            <div class="pdd-horizon-5 pdd-vertical-0 pdd-top-25 pdd-btm-5">
                <figure class="col-md-3 masonry-brick mrg-btm-30">
                    <a href="<?php echo base_url(); ?>assets/images/dashboard/facultyday.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="gallery-item" data-size="700x1000">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/dashboard/facultyday.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </a>
                </figure>
                <figure class="col-md-3 masonry-brick mrg-btm-30">
                    <a href="<?php echo base_url(); ?>assets/images/dashboard/facultydayy.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="gallery-item" data-size="700x1000">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/dashboard/facultydayy.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </a>
                </figure>
                <figure class="col-md-3 masonry-brick mrg-btm-30">
                    <a href="<?php echo base_url(); ?>assets/images/dashboard/spring.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="gallery-item" data-size="700x1000">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/dashboard/spring.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </a>
                </figure>

                <figure class="col-md-3 masonry-brick mrg-btm-30">
                    <a href="<?php echo base_url(); ?>assets/images/dashboard/lesson.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="gallery-item" data-size="700x1000">
                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/dashboard/lesson.jpg" alt="">
                        <div class="overlay">

                        </div>
                    </a>
                </figure>

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

<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 -->
<!--<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>-->
<!---->
<!--<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>-->


<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="padding-15">
                    <div class="row">
                        <video id="my-video" class="video-js" controls preload="auto" height="305px"
                               poster="<?php echo base_url(); ?>assets/video/StoryVideo_PosterFrame.jpg" data-setup="{}">
                            <source id="play_video" src="<?php echo base_url(); ?>assets/video/bup_ad2.mp4" type='video/mp4'>
                            <source src="MY_VIDEO.webm" type='<?php echo base_url(); ?>assets/video/video/webm'>
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

<div class="modal modal-lg fade" id="modal-document">
    <div class="modal-dialog modal-document" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <object type="application/pdf" class="modal-lg" data="<?php echo base_url(); ?>assets/documents/tasklist.pdf">
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
