
<style>
    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }

    .thumbnail {
        padding: 0;
    }

    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        width: 100%;
    }
</style>

<style>
    .progress-radial {
        float: left;
        margin-right: 30px;
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 2px solid #2f3439; // remove gradient color
    background-color: #5bc0de; // default 100%
    }

    .progress-radial .overlay {
        width: 100%;
        height: 100%;
        padding: 15px;
        border-radius: 50%;
        text-align: center;
        line-height: 60px;
        font-size: 16px;
    }
    .controls {
        position: absolute;
        bottom: 25%;
        left: 0px;
        width: 100%;
        text-align: center;
    }
    .controls .glyphicon {
        font-size: 2em;
        color: rgba(255, 255, 255, 0.7);
        padding: 5px;
        margin: 0px 10px;
        cursor: pointer;
    }
    .controls .glyphicon.active {
        font-size: 3em;
        margin: 5px 10px;
        text-shadow: 0px 0px 5px rgba(51, 51, 51, 1);
        color: #5bc0de;
    }
    .progress {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(90deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-0 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(90deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-1 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(93.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-2 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(97.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-3 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(100.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-4 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(104.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-5 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(108deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-6 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(111.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-7 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(115.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-8 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(118.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-9 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(122.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-10 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(126deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-11 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(129.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-12 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(133.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-13 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(136.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-14 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(140.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-15 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(144deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-16 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(147.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-17 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(151.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-18 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(154.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-19 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(158.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-20 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(162deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-21 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(165.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-22 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(169.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-23 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(172.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-24 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(176.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-25 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(180deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-26 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(183.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-27 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(187.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-28 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(190.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-29 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(194.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-30 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(198deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-31 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(201.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-32 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(205.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-33 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(208.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-34 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(212.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-35 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(216deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-36 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(219.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-37 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(223.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-38 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(226.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-39 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(230.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-40 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(234deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-41 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(237.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-42 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(241.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-43 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(244.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-44 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(248.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-45 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(252deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-46 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(255.6deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-47 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(259.2deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-48 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(262.8deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-49 {
        background-image: linear-gradient(90deg, #2f3439 50%, transparent 50%, transparent), linear-gradient(266.4deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-50 {
        background-image: linear-gradient(-90deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-51 {
        background-image: linear-gradient(-86.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-52 {
        background-image: linear-gradient(-82.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-53 {
        background-image: linear-gradient(-79.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-54 {
        background-image: linear-gradient(-75.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-55 {
        background-image: linear-gradient(-72deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-56 {
        background-image: linear-gradient(-68.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-57 {
        background-image: linear-gradient(-64.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-58 {
        background-image: linear-gradient(-61.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-59 {
        background-image: linear-gradient(-57.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-60 {
        background-image: linear-gradient(-54deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-61 {
        background-image: linear-gradient(-50.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-62 {
        background-image: linear-gradient(-46.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-63 {
        background-image: linear-gradient(-43.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-64 {
        background-image: linear-gradient(-39.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-65 {
        background-image: linear-gradient(-36deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-66 {
        background-image: linear-gradient(-32.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-67 {
        background-image: linear-gradient(-28.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-68 {
        background-image: linear-gradient(-25.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-69 {
        background-image: linear-gradient(-21.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-70 {
        background-image: linear-gradient(-18deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-71 {
        background-image: linear-gradient(-14.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-72 {
        background-image: linear-gradient(-10.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-73 {
        background-image: linear-gradient(-7.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-74 {
        background-image: linear-gradient(-3.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-75 {
        background-image: linear-gradient(0deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-76 {
        background-image: linear-gradient(3.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-77 {
        background-image: linear-gradient(7.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-78 {
        background-image: linear-gradient(10.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-79 {
        background-image: linear-gradient(14.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-80 {
        background-image: linear-gradient(18deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-81 {
        background-image: linear-gradient(21.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-82 {
        background-image: linear-gradient(25.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-83 {
        background-image: linear-gradient(28.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-84 {
        background-image: linear-gradient(32.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-85 {
        background-image: linear-gradient(36deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-86 {
        background-image: linear-gradient(39.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-87 {
        background-image: linear-gradient(43.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-88 {
        background-image: linear-gradient(46.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-89 {
        background-image: linear-gradient(50.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-90 {
        background-image: linear-gradient(54deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-91 {
        background-image: linear-gradient(57.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-92 {
        background-image: linear-gradient(61.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-93 {
        background-image: linear-gradient(64.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-94 {
        background-image: linear-gradient(68.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-95 {
        background-image: linear-gradient(72deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-96 {
        background-image: linear-gradient(75.6deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-97 {
        background-image: linear-gradient(79.2deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-98 {
        background-image: linear-gradient(82.8deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-99 {
        background-image: linear-gradient(86.4deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }

    .progress-100 {
        background-image: linear-gradient(90deg, #5bc0de 50%, transparent 50%, transparent), linear-gradient(270deg, #5bc0de 50%, #2f3439 50%, #2f3439);
    }
</style>

<style>
    .video-list-thumbs{}
    .video-list-thumbs > li{
        margin-bottom:12px;
    }
    .video-list-thumbs > li:last-child{}
    .video-list-thumbs > li > a{
        display:block;
        position:relative;
        background-color: #111;
        color: #fff;
        padding: 8px;
        border-radius:3px
        transition:all 500ms ease-in-out;
        border-radius:4px
    }
    .video-list-thumbs > li > a:hover{
        box-shadow:0 2px 5px rgba(0,0,0,.3);
        text-decoration:none
    }
    .video-list-thumbs h2{
        bottom: 0;
        font-size: 14px;
        height: 33px;
        margin: 8px 0 0;
    }
    .video-list-thumbs .glyphicon-play-circle{
        font-size: 60px;
        opacity: 0.6;
        position: absolute;
        right: 39%;
        top: 31%;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
        transition:all 500ms ease-in-out;
    }
    .video-list-thumbs > li > a:hover .glyphicon-play-circle{
        color:#fff;
        opacity:1;
        text-shadow:0 1px 3px rgba(0,0,0,.8);
    }
    .video-list-thumbs .duration{
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 2px;
        color: #fff;
        font-size: 11px;
        font-weight: bold;
        left: 12px;
        line-height: 13px;
        padding: 2px 3px 1px;
        position: absolute;
        top: 12px;
        transition:all 500ms ease;
    }
    .video-list-thumbs > li > a:hover .duration{
        background-color:#000;
    }
    @media (min-width:320px) and (max-width: 480px) {
        .video-list-thumbs .glyphicon-play-circle{
            font-size: 35px;
            right: 36%;
            top: 27%;
        }
        .video-list-thumbs h2{
            bottom: 0;
            font-size: 12px;
            height: 22px;
            margin: 8px 0 0;
        }
    }
</style>



<div class="page-title">
    <h4>Upload Contents</h4>
</div>



<div class="row">

    <!--video-->
    <div class="col-md-6 col-sm-6 col-xm-12 pdd-lf-20 pdd-rt-10">
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h4>Video Contents</h4>
                    <div class="txt-al-center">
                        <video width="420" height="240" controls>
                            <source src="<?php echo base_url('assets/video/movie.mp4'); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                <p>
                <h5>Features:</h5>
                <ul>
                    <li>Responsive design with hover effect</li>
                    <li>Compatible with bootstrap 3.0.0 and Up</li>
                    <li>No Javascript</li>
                </ul>
                <hr>
                </p>
                </div>


                <ul class="list-unstyled video-list-thumbs">
                    <li class="col-lg-3 col-sm-4 col-xs-6">
                        <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                            <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                            <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span class="duration">03:15</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-4 col-xs-6">
                        <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                            <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                            <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span class="duration">03:15</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-sm-4 col-xs-6">
                        <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                            <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                            <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span class="duration">03:15</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                            <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                            <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span class="duration">03:15</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                        <a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
                            <img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="Barca" class="img-responsive" height="130px" />
                            <h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
                            <span class="glyphicon glyphicon-play-circle"></span>
                            <span class="duration">03:15</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--audio-->
    <div class="col-md-6 col-sm-6 col-xm-12 pdd-lf-10 pdd-rt-20">
        <div class="panel">
            <div class="panel-body">
                <h4>Audio Contents</h4>
                <div class="text-center">
                    <h2 >Audio may take some time to buffer please wait!</h2>
                    <p>Audio provided by <a href="http://robbbenson.com/Robb_Benson/Songwriter.html">Robb Benson</a> click on his name to check out his website.</p>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                        <div class="progress-radial progress">
                            <div class="overlay">
                                <img class="img-responsive img-circle" src="http://robbbenson.com/robbcover.jpg" alt="">
                                <div class="controls">
                                    <span class="glyphicon glyphicon-volume-up" id="mute" data-toggle="audioplayer" data-icon="muted" data-active="false"></span>
                                    <span class="glyphicon glyphicon-volume-off hide" id="muted" data-toggle="audioplayer" data-icon="mute" data-active="false"></span>
                                    <span class="glyphicon glyphicon-stop active" id="stop" data-toggle="audioplayer" data-icon="play"></span>
                                    <span class="glyphicon glyphicon-play hide" id="play" data-toggle="audioplayer" data-icon="stop"></span>
                                    <span class="glyphicon glyphicon-pause" id="pause" data-toggle="audioplayer" data-icon="pause"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6 col-sm-6 col-xm-12 pdd-rt-10">
        <!-- Slider -->
        <div class="panel">
            <div class="panel-body">
                <h4>Image Contents</h4>
                <div class="col-sm-6" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0">
                                <img src="http://placehold.it/150x150&text=zero">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/470x480&text=zero"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/470x480&text=1"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/470x480&text=2"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/470x480&text=3"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/470x480&text=5"></div>

                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>

                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>

                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>

                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>

                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>

                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>

                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xm-12 pdd-rt-10">
        <!-- Doc-->
        <div class="panel">
            <div class="panel-body">
                <h4>Image Contents</h4>
                <div class="col-sm-6" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0">
                                <img src="http://placehold.it/150x150&text=zero">
                            </a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="http://placehold.it/470x480&text=zero"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="http://placehold.it/470x480&text=1"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="http://placehold.it/470x480&text=2"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="http://placehold.it/470x480&text=3"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="http://placehold.it/470x480&text=4"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="http://placehold.it/470x480&text=5"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="http://placehold.it/470x480&text=6"></div>

                                        <div class="item" data-slide-number="7">
                                            <img src="http://placehold.it/470x480&text=7"></div>

                                        <div class="item" data-slide-number="8">
                                            <img src="http://placehold.it/470x480&text=8"></div>

                                        <div class="item" data-slide-number="9">
                                            <img src="http://placehold.it/470x480&text=9"></div>

                                        <div class="item" data-slide-number="10">
                                            <img src="http://placehold.it/470x480&text=10"></div>

                                        <div class="item" data-slide-number="11">
                                            <img src="http://placehold.it/470x480&text=11"></div>

                                        <div class="item" data-slide-number="12">
                                            <img src="http://placehold.it/470x480&text=12"></div>

                                        <div class="item" data-slide-number="13">
                                            <img src="http://placehold.it/470x480&text=13"></div>

                                        <div class="item" data-slide-number="14">
                                            <img src="http://placehold.it/470x480&text=14"></div>

                                        <div class="item" data-slide-number="15">
                                            <img src="http://placehold.it/470x480&text=15"></div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
            </div>
        </div>
    </div>

</div>





<script>
</script>


<?php
// --- define plugin js
//$mtPagePlugins = array('assets/js/dashboard/jquery-1.11.1.min.js', 'assets/js/dashboard/jquery-1.10.2.min.js', '/assets/js/dashboard/bootstrap.min.js', 'assets/js/dashboard/dashboard.js');
$mtPagePlugins = array('/assets/js/dashboard/bootstrap.min.js', 'assets/js/dashboard/dashboard.js');

//---- define page javascript
$mtPageScripts = array("page_javascript/dashboard/image.js", "page_javascript/dashboard/audio.js");
?>
