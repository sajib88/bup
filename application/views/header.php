<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>BUP - Digital Central Archiving System</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/netdna/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page plugins css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/nvd3/build/nv.d3.min.css" />

    <!-- core css -->
    <link href="<?php echo base_url(); ?>assets/css/ei-icon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet">

    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/upload/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/upload/css/jquery.fileupload.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/upload/css/jquery.fileupload-ui.css">
    <!--upload end-->

    <!-- image light box -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard/lightbox/ekko-lightbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard/lightbox/ekko-lightbox.min.css">
    <!-- image light box -->

    <!-- sound-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/audio/src/css/mkhplayer.default.css"/>
    <!-- sound-->

    <!-- page plugins css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/selectize/dist/css/selectize.default.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/summernote/dist/summernote.css" />

    <!-- page plugins css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets//bower_components/datatables/media/css/jquery.dataTables.css" />

    <!-- custom css -->
    <link href="<?php echo base_url(); ?>assets/css/custome.css" rel="stylesheet">


</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Side Nav START -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <div class="side-nav-logo">
                    <a href="index.html">

                        <div class="logo logo-dark" style="background-image: url('<?php echo base_url(); ?>/assets/images/logo/logo.png')"></div>
                        <div class="logo logo-white" style="background-image: url('<?php echo base_url(); ?>/assets/images/logo/logo-white.png')"></div>
                    </a>
                    <div class="mobile-toggle side-nav-toggle">
                        <a href="">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item border-bottom active">
                        <a class="mrg-top-30" href="<?php echo base_url(); ?>welcome/dashboard">
                                <h1>
                                    <small class="font-size-19">
                                        <span class="icon-holder">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="title">Dashboard</span>
                                    </small>
                                </h1>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="" href="<?php echo base_url(); ?>upload">
                            <h1>
                                <small class="font-size-19">
                                    <span class="icon-holder">
                                                <i class="ti-upload"></i>
                                            </span>
                                    <span class="title">Upload</span>
                                </small>
                            </h1>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="" href="<?php echo base_url(); ?>faq">
                            <h1>
                                <small class="font-size-19">
                                    <span class="icon-holder">
                                                <i class="ti ti-help"></i>
                                            </span>
                                    <span class="title">FAQ</span>
                                </small>
                            </h1>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="" href="<?php echo base_url(); ?>faq/support">
                            <h1>
                                <small class="font-size-19">
                                    <span class="icon-holder">
										<i class="ti ti-shine"></i>
									</span>
                                    <span class="title">Support</span>
                                </small>
                            </h1>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="col-md-12 no-pdd-right">
                        <div class="col-md-2 no-pdd-horizon width-100">
                            <ul class="nav-left pdd-top-15">
                                <li>
                                    <h3 class="txt-color-0f9aee"><i class="<?php echo $icon ?>"></i>
                                        <span><?php echo $name ?></span></h3>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-7">
                            <ul id="search_text" class="col-md-12 nav-right no-pdd-horizon txt-al-center width-100 pdd-top-10">
                                <form id="search_data" class="width-100" action="<?php echo base_url('search/advsearch') ?>" method="post">
                                    <div class="col-md-10 btn-group no-pdd-horizon">
                                        <input id="myInput" class="form-control" name="searchedby" type="text" placeholder="Search...">

                                        <button id="myBtn" class="btn btn-info" type="submit">
                                            <i class="ti-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-2 no-pdd-horizon width-100 pdd-top-15">
                                        <ul class="nav-left">
                                            <a href="<?php echo base_url('search/advsearch') ?>">
                                                <h3><small>Advance Search</small></h3>
                                            </a>
                                        </ul>
                                    </div>
                                </form>
                            </ul>
                        </div>



                        <div class="col-md-3 no-pdd-horizon">
                            <ul class="nav-right">

                                <li class="user-profile dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                        <!--  <img class="profile-img img-fluid" src="--><?php //echo base_url('assets/images/user.jpg'); ?><!--" alt="">-->
                                        <div class="user-info">
                                            <span class="name pdd-right-5">System Admin</span>
                                            <i class="ti-angle-down font-size-10"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="">
                                                <i class="ti-settings pdd-right-10"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>
                                        <!--                                    <li>-->
                                        <!--                                        <a href="">-->
                                        <!--                                            <i class="ti-user pdd-right-10"></i>-->
                                        <!--                                            <span>Profile</span>-->
                                        <!--                                        </a>-->
                                        <!--                                    </li>-->
                                        <!--                                    <li>-->
                                        <!--                                        <a href="">-->
                                        <!--                                            <i class="ti-email pdd-right-10"></i>-->
                                        <!--                                            <span>Inbox</span>-->
                                        <!--                                        </a>-->
                                        <!--                                    </li>-->
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="<?php echo base_url('') ?>">
                                                <i class="ti-power-off pdd-right-10"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>






                </div>
            </div>
            <!-- Header END -->

            <!-- Side Panel START -->
            <div class="side-panel">
                <div class="side-panel-wrapper bg-white">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" href="#chat" role="tab" data-toggle="tab">
                                <span>Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile" role="tab" data-toggle="tab">
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#todo-list" role="tab" data-toggle="tab">
                                <span>Todo</span>
                            </a>
                        </li>
                        <li class="panel-close">
                            <a class="side-panel-toggle" href="javascript:void(0);">
                                <i class="ti-close"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- chat START -->
                        <div id="chat" role="tabpanel" class="tab-pane fade in active">
                            <div class="chat">
                                <div class="chat-user-list scrollable">
                                    <div class="chat-section">
                                        <h5 class="chat-title">Recent</h5>
                                        <a href="javascript:void(0);" class="chat-user chat-toggle">
                                            <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-1.jpg'); ?>" alt="">
                                            <div class="user-info">
                                                <span class="user-name">Jordan Hurst</span>
                                                <span class="prev-chat">What good's a reward if...</span>
                                            </div>
                                            <span class="status online"><span></span></span>
                                        </a>
                                        <a href="javascript:void(0);" class="chat-user chat-toggle">
                                            <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-2.jpg'); ?>" alt="">
                                            <div class="user-info">
                                                <span class="user-name">Harriet Douglas</span>
                                                <span class="prev-chat">Don't talk to me, stranger...</span>
                                            </div>
                                            <span class="status no-disturb"></span>
                                        </a>
                                        <a href="javascript:void(0);" class="chat-user chat-toggle">
                                            <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-3.jpg'); ?>" alt="">
                                            <div class="user-info">
                                                <span class="user-name">Victoria Clayton</span>
                                                <span class="prev-chat">Well, the Force is what...</span>
                                            </div>
                                            <span class="status away"></span>
                                        </a>
                                        <a href="javascript:void(0);" class="chat-user chat-toggle">
                                            <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-6.jpg'); ?>" alt="">
                                            <div class="user-info">
                                                <span class="user-name">Michael Birch</span>
                                                <span class="prev-chat">Good. Use your aggressive...</span>
                                            </div>
                                            <span class="status online"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="conversation">
                                    <div class="conversation-wrapper">
                                        <div class="conversation-header">
                                            <a href="javascript:void(0);" class="back chat-toggle">
                                                <i class="ti-arrow-circle-left"></i>
                                            </a>
                                            <span class="user-name">Jordan Hurst</span>
                                        </div>
                                        <div class="conversation-body">
                                            <div class="msg">
                                                <div class="bubble me">
                                                    <span>Feeling all right, sir?</span>
                                                </div>
                                            </div>
                                            <div class="msg">
                                                <div class="bubble friend">
                                                    <span>Just like new</span>
                                                </div>
                                            </div>
                                            <div class="msg">
                                                <div class="bubble friend">
                                                    <span>How about you?</span>
                                                </div>
                                            </div>
                                            <div class="msg">
                                                <div class="bubble me">
                                                    <span>Right now I feel I could take on the whole Empire myself</span>
                                                </div>
                                            </div>
                                            <div class="msg">
                                                <div class="bubble friend">
                                                    <span>All right</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-footer">
                                            <button class="upload-btn">
                                                <i class="ti-camera"></i>
                                            </button>
                                            <input class="chat-input" type="text" placeholder="Type a message...">
                                            <button class="sent-btn">
                                                <i class="fa fa-send-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chat END -->
                        <!-- profile START -->
                        <div id="profile" role="tabpanel" class="tab-pane fade">
                            <div class="profile scrollable">
                                <div class="pdd-horizon-20 pdd-top-20">
                                    <div class="border bottom">
                                        <div class="text-center mrg-top-20">
                                            <div class="row">
                                                <div class="col-md-6 ml-auto mr-auto text-center">
                                                    <img class="img-fluid border-radius-round" src="<?php echo base_url(); ?>assets/images/avatars/user-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <h4 class="mrg-top-20">Nate Leong</h4>
                                            <span class="">@Frontend Developer</span>
                                        </div>
                                        <div class="row text-center pdd-vertical-20">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-4 border right">
                                                        <div class="pdd-vertical-10">
                                                            <span class="font-size-18 text-dark">18</span>
                                                            <small>Projects</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 border right">
                                                        <div class="pdd-vertical-10">
                                                            <span class="font-size-18 text-dark">1,362</span>
                                                            <small>Followers</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4">
                                                        <div class="pdd-vertical-10">
                                                            <span class="font-size-18 text-dark">362</span>
                                                            <small>Points</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pdd-horizon-20 pdd-top-20">
                                    <div class="border bottom">
                                        <h5 class="text-dark mrg-btm-20">Quick Tools</h5>
                                        <ul class="list-unstyled list-link font-size-16 pdd-btm-20">
                                            <li>
                                                <a href="">
                                                    <i class="ti-user pdd-right-10"></i>
                                                    <span>Friend Request</span>
                                                    <span class="label label-info mrg-left-5">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="ti-book pdd-right-10"></i>
                                                    <span>Inbox</span>
                                                    <span class="label label-warning mrg-left-5">8</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="ti-settings pdd-right-10"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="padding-20">
                                    <h5 class="text-dark mrg-btm-20">Recent</h5>
                                    <ul class="list-unstyled list-info">
                                        <li>
                                            <a href="">
                                                <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-1.jpg'); ?>" alt="">
                                                <div class="info">
                                                    <span class="title">Jordan Hurst</span>
                                                    <span class="sub-title">have send you a request</span>
                                                    <span class="float-object">8m</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img class="thumb-img" src="<?php echo base_url('assets/images/avatars/thumb-4.jpg'); ?>" alt="">
                                                <div class="info">
                                                    <span class="title">Samuel Field</span>
                                                    <span class="sub-title">have send you a request</span>
                                                    <span class="float-object">7d</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                    <span class="thumb-img bg-info text-center font-size-25 font-secondary">
															<span class="text-white">E</span>
                                                    </span>
                                                <div class="info">
                                                    <span class="title">Espire</span>
                                                    <span class="sub-title">Welcome on Board</span>
                                                    <span class="float-object">7d</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- profile END -->
                        <!-- todo START -->
                        <div id="todo-list" role="tabpanel" class="tab-pane fade">
                            <div class="todo-wrapper">
                                <div class="todo-category-wrapper">
                                    <div class="row mrg-btm-15">
                                        <div class="col-md-12">
                                            <h3 class="no-mrg-top">Todo List</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="todo-toggle">
                                        <div class="todo-category">
                                            <span class="amount">8</span>
                                            <span class="category">Today</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="todo-toggle">
                                        <div class="todo-category">
                                            <span class="amount">18</span>
                                            <span class="category">This Week</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="todo-toggle">
                                        <div class="todo-category">
                                            <span class="amount">28</span>
                                            <span class="category">This Month</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="todo-toggle">
                                        <div class="create-category">
                                            <i class="amount fa fa-plus-circle"></i>
                                            <span class="category">New Category</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="todolist-wrapper">
                                    <div class="todolist-header">
                                        <a href="javascript:void(0);" class="back todo-toggle">
                                            <i class="ti-arrow-circle-left"></i>
                                        </a>
                                        <h3 class="category">This Week</h3>
                                        <a href="" class="add">
                                            <span>ADD</span>
                                        </a>
                                    </div>
                                    <div class="todolist-body">
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="task1" name="task1" type="checkbox">
                                            <label for="task1">I hope the old man got that tractor </label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="task2" name="task2" type="checkbox">
                                            <label for="task2">Come on, come on!</label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="task3" name="task3" type="checkbox">
                                            <label for="task3">it was dangerous here</label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="task4" name="task4" type="checkbox">
                                            <label for="task4">I hope the old man got that tractor </label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="task5" name="task5" type="checkbox">
                                            <label for="task5">Artoo! Artoo, quickly!</label>
                                        </div>
                                    </div>
                                    <div class="todolist-body">
                                        <div class="pdd-btm-5 mrg-btm-15 border bottom">
                                            <p class="mrg-btm-5">Completed</p>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="completed-1" name="completed-1" type="checkbox" checked="">
                                            <label for="completed-1">I hope the old man got that tractor </label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="completed-2" name="completed-2" type="checkbox" checked="">
                                            <label for="completed-2">Come on, come on!</label>
                                        </div>
                                        <div class="checkbox">
                                            <button class="delete">
                                                <i class="ti-close"></i>
                                            </button>
                                            <input id="completed-3" name="completed-3" type="checkbox" checked="">
                                            <label for="completed-3">it was dangerous here</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side Panel END -->

            <!-- theme configurator START -->
            <div class="theme-configurator">
                <div class="configurator-wrapper">
                    <div class="config-header">
                        <h4 class="config-title">Config Panel</h4>
                        <button class="config-close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="config-body">
                        <div class="mrg-btm-30">
                            <p class="lead font-weight-normal">Header Color</p>
                            <div class="theme-colors header-default">
                                <input type="radio" id="header-default" name="theme">
                                <label for="header-default"></label>
                            </div>
                            <div class="theme-colors header-primary">
                                <input type="radio" class="primary" id="header-primary" name="theme">
                                <label for="header-primary"></label>
                            </div>
                            <div class="theme-colors header-info">
                                <input type="radio" id="header-info" name="theme">
                                <label for="header-info"></label>
                            </div>
                            <div class="theme-colors header-success">
                                <input type="radio" id="header-success" name="theme">
                                <label for="header-success"></label>
                            </div>
                            <div class="theme-colors header-danger">
                                <input type="radio" id="header-danger" name="theme">
                                <label for="header-danger"></label>
                            </div>
                            <div class="theme-colors header-dark">
                                <input type="radio" id="header-dark" name="theme">
                                <label for="header-dark"></label>
                            </div>
                        </div>
                        <div class="mrg-btm-30">
                            <p class="lead font-weight-normal">Sidebar Color</p>
                            <div class="theme-colors sidenav-default">
                                <input type="radio" id="sidenav-default" name="sidenav">
                                <label for="sidenav-default"></label>
                            </div>
                            <div class="theme-colors side-nav-dark">
                                <input type="radio" id="side-nav-dark" name="sidenav">
                                <label for="side-nav-dark"></label>
                            </div>
                        </div>
                        <div class="mrg-btm-30">
                            <p class="lead font-weight-normal no-mrg-btm">RTL</p>
                            <div class="toggle-checkbox checkbox-inline toggle-sm mrg-top-10">
                                <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                <label for="rtl-toogle"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- theme configurator END -->

            <!-- Theme Toggle Button START -->
            <button class="theme-toggle btn btn-rounded btn-icon">
                <i class="ti-palette"></i>
            </button>
            <!-- Theme Toggle Button END -->

            <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="container-fluid">


