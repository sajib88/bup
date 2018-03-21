
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

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->

<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/vendor/jquery.ui.widget.js"></script>-->
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->

    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- blueimp Gallery script -->

    <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.iframe-transport.js"></script>-->
    <!-- The basic File Upload plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload.js"></script>-->
    <!-- The File Upload processing plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-process.js"></script>-->
    <!-- The File Upload image preview & resize plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-image.js"></script>-->
    <!-- The File Upload audio preview plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-audio.js"></script>-->
    <!-- The File Upload video preview plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-video.js"></script>-->
    <!-- The File Upload validation plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-validate.js"></script>-->
    <!-- The File Upload user interface plugin -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/jquery.fileupload-ui.js"></script>-->
    <!-- The main application script -->
<!--    <script src="--><?php //echo base_url(); ?><!--assets/js/upload/js/main.js"></script>-->

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