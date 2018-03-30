<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>BUP DIGITAL ARCHIVE</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.png">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="<?php echo base_url(); ?>assets/css/ei-icon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custome.css" rel="stylesheet">
</head>

<body>
<div class="app">
    <div class="authentication">
        <div class="sign-in">
            <div class="row no-mrg-horizon">
                <div class="col-md-8 no-pdd-horizon d-none d-md-block">
                    <div class="full-height bg" style="background-image: url(<?php echo base_url('assets/images/others/BBA-Study-in-Bangladesh.jpg'); ?>)">
                        <div class="img-caption">
                            <h1 class="caption-title">Welcome & Greetings!</h1>
                            <p class="caption-text">
                                Welcome to the website of Bangladesh University of Professionals (BUP).
                                It is a public university established on June 5, 2008 with a motto "Excellence Through knowledge".
                                BUP with its own unique features is set up in a green landscape away from busy life of metropolitan city.
                                The University provides a tranquil, pollution free, secured campus life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no-pdd-horizon">
                    <div class="full-height bg-white height-80 pdd-top-20">
                        <div class="vertical-align full-height pdd-horizon-70">
                            <div class="table-cell">
                                <div class="pdd-horizon-15">
                                    <div class="pdd-top-btm-20 txt-al-center">

                                        <div class="visible-lg"><img class="img-logo " src="<?php echo base_url('assets/images/logo/BUP_logo_login.jpg'); ?>"></div>
                                        <div class="hidden-lg"><img class="img-logo "  src="<?php echo base_url('assets/images/logo/BUP_logo_login.jpg'); ?>"></div>


                                    </div>

                                    <h2>Login</h2>
                                    <p class="mrg-btm-15 font-size-13">Please enter your user name and password to login</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="User name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox font-size-12">
                                            <input id="agreement" name="agreement" type="checkbox">
                                            <label for="agreement">Keep Me Signed In</label>
                                        </div>
                                        <a href="<?php echo base_url('welcome/dashboard' ); ?>" class="btn btn-info" aria-hidden="true">Login</a>
<!--                                        <button class="btn btn-info">Login</button>-->
                                        <div class="hidden-lg"> <div class="pdd-top-20"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="login-footer">
                            <span class="font-size-13 pull-right pdd-top-10">Developed and Managed By <a href="http://osourcebd.com/">Osource Bangaldesh Ltd.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- build:js assets/js/vendor.js -->
<!-- plugins js -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/PACE/pace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<!-- endbuild -->

<!-- build:js assets/js/app.min.js -->
<!-- core js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!-- endbuild -->

<!-- page js -->

</body>

</html>