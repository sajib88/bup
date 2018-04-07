
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
<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/dist/Chart.min.js"></script>

<script src="<?php echo base_url(); ?>assets/bower_components/selectize/dist/js/standalone/selectize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/summernote/dist/summernote.min.js"></script>

<!-- page js -->
<script src="<?php echo base_url(); ?>assets/js/forms/form-elements.js"></script>


<!-- build:js assets/js/app.min.js -->
<!-- core js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!-- endbuild -->

<?php

//print_r($mtPagePlugins);

if (!empty($mtPagePlugins)) {
    foreach ($mtPagePlugins as $script) {
        echo '<script src="' . base_url() . $script . '"></script>';
    }
}

?>

<?php

//print_r($mtPageScripts);

if (!empty($mtPageScripts)) {
    foreach ($mtPageScripts as $script) {
        echo '<script src="' . base_url() . $script . '"></script>';
    }
}

?>
<!--<LocationMatch "--><?php //base_url(); ?><!--.assets/documents/tasklist.(?i:pdf)$">-->
<!--ForceType application/pdf-->
<!--Header set Content-Disposition inline-->
<!--</LocationMatch>-->

</body>

</html>