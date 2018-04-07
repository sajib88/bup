
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
