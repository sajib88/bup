
</div>
</div>
<!-- Content Wrapper END -->

<!-- Footer START -->
<footer class="content-footer">
    <div class="footer">
        <div class="copyright">
            <span>Copyright © 2018 <b class="text-dark">Bangladesh University of Professionals(BUP)</b>. All rights reserved.</span>
            <span class="go-right">
                                <span class="text-gray mrg-right-15">Developed and Managed By <a href="http://osourcebd.com/">Osource Bangaldesh Ltd.</a></span>
                <!--									<a href="" class="text-gray mrg-right-15">Term &amp; Conditions</a>-->
                <!--									<a href="" class="text-gray">Privacy &amp; Policy</a>-->
								</span>
        </div>
    </div>
</footer>
<!-- Footer END -->

</div>
<!-- Page Container END -->

</div>
</div>

<!-- build:js assets/js/vendor.js -->
<!-- plugins js -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/PACE/pace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<!-- endbuild -->

<!-- page plugins js -->
<script src="<?php echo base_url(); ?>assets/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/maps/jquery-jvectormap-us-aea.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/d3/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/nvd3/build/nv.d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/jquery.sparkline/index.js"></script>
<!--    <script src="--><?php //echo base_url(); ?><!--assets/dropzone-4.3.0/dist/dropzone.js"></script>-->



<!--    upload-->
<link rel="stylesheet" href="<?php echo base_url(); ?>n/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>n/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>n/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>n/css/jquery.fileupload-ui.css">
<!-- CSS FOR UPLOAD -->
<!-- JS FOR UPLOAD -->
<script src="<?php echo base_url(); ?>n/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo base_url(); ?>n/js/tmpl.min.js"></script>
<script src="<?php echo base_url(); ?>n/js/load-image.all.min.js"></script>
<script src="<?php echo base_url(); ?>n/js/canvas-to-blob.min.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.iframe-transport.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-process.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-image.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-audio.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-video.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-validate.js"></script>
<script src="<?php echo base_url(); ?>n/js/jquery.fileupload-ui.js"></script>
<script src="<?php echo base_url(); ?>n/js/main.js"></script>

<!--    upload end-->

<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/dist/Chart.min.js"></script>

<!-- build:js assets/js/app.min.js -->
<!-- core js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!-- endbuild -->

<?php


if (!empty($PagePlug)) {
    foreach ($PagePlug as $script) {
        echo '<script src="' . base_url() . $script . '"></script>';
    }
}
?>


</body>

</html>