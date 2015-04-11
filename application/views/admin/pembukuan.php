<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pembukuan - Technicer dental - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--docs-->
    <!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
    <link id="default" rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>/css/docs/docs.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico">

    <!--jquery-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.js"></script>
    <!--jquery peity-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/chart/jquery.peity.js"></script>
    <!--jquery cookie-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.cookie.js"></script>

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</head>

<body class="home">

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->

<!--**********************************\\\ NAVBAR TOP ///*******************************************-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-search"></span>

            </button>
            <a class="brand" href="#"><img src="<?php echo $resource_path;?>img/gigi/logo.png" alt="">      Technicer dental</a>

            <div class="nav-collapse collapse">


                <form class="search navbar-search pull-right visible-desktop" method="post" action="#" style="margin-top: 9px">
                    <input type="text" name="q" placeholder="Enter Keywords..."/>
                    <ul class="results">
                        <li><a href="#">Search Result #1<br/><span>Description...</span></a></li>
                        <li><a href="#">Search Result #2<br/><span>Description...</span></a></li>
                        <li><a href="#">Search Result #3<br/><span>Description...</span></a></li>
                        <li><a href="#">Search Result #4</a></li>
                    </ul>
                </form>

                <!------------- start on mobile -------------------->
                <form class="search navbar-search pull-right visible-phone visible-tablet" method="post" action="#">
                    <input type="text"  placeholder="Enter Keywords..." class="span12"/>

                </form>

                <!------------- end on mobile -------------------->





            </div>
        </div>
    </div>
</div>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ HEADER ///*******************************************-->
<div class="container-fluid visible-desktop" id="header">
    <div class="row-fluid header-menu">
        <div class="navbar">
            <div class="container">

                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>


                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse">
                    <ul class="nav nav-pills pull-left">
                        <li>

                            <a href="<?php echo $base_url;?>/admin/dashboard" id="active" class="header-menu-a ">

                                <ul class="nav">
                                    <li>
                                        <br>
                                        <i class="icon-home"></i>
                                    </li>
                                    <li>
                                        <br>
                                        <span>Dashboard</span>
                                    </li>
                                </ul>

                            </a>

                        </li>

                        <li>
                            <a href="#" class="header-menu-a">
                                <ul class="nav">
                                    <li>
                                        <br>
                                        <i class="icon-edit"></i>
                                    </li>
                                    <li>
                                        <br>
                                        <span>Manage</span>
                                    </li>
                                </ul>


                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo $base_url; ?>/login/logout" class="dropdown-toggle header-menu-a">
                                <ul class="nav">
                                    <li>
                                        <br>
                                        <i class="icon-cog"></i>
                                    </li>
                                    <li>
                                        <br>
                                        <span>Logout</span>
                                    </li>
                                </ul>

                            </a>

                        </li>


                    </ul>

                </div>

            </div>
        </div>


    </div>
</div>

<!--******************* view on mobile for view earning ***********************-->
<div class="row-fluid visible-phone visible-tablet">
    <div class="span12">
        <div class="table-wrapper">

            <div class="accordion">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#earning-mobile">
                            $ EARNING
                            <ul class="nav pull-right">
                                <li class="close">
                                    <i class="icon-minus"></i>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div id="earning-mobile" class="accordion-body in collapse" style="height: auto;">
                        <div class="accordion-inner">
                            <div class="row-fluid">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Today's Earning</th>
                                        <th>Current Rate</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>
                                                $ 755,35
                                            </strong>
                                        </td>
                                        <td>
                                            <strong>
                                                73 %
                                            </strong>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<br>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ CONTENT ///*******************************************-->
<div class="container-fluid" id="content">
<div class="row-fluid">
    <!--content left-->
    <div id="content-left" class="span2">

        <div class="table-wrapper sidebar-nav visible-phone visible-tablet">
            <ul class="nav nav-tabs nav-stacked">
                <!------------- start on mobile -------------------->
                <li class="sidebar-li-default">
                    <a href="#menu-mobile" data-toggle="collapse" class="sidebar-a-mobile"><i class="icon-dashboard"></i> <span>MENU</span></a>
                    <div id="menu-mobile" class="accordion-body in collapse">
                        <div class="accordion-inner" style="background-color: #dddddd;">

                            <ul class="nav nav-tabs nav-stacked sidebar-ul">
                                <li><a href="<?php echo $resource_path;?>pages/dashboard/dashboard.html" class="sidebar-active"><i class="icon-home"></i> Dashboard
                                    <i class="icon-map-marker pull-right"></i></a></li>
                                <li><a href="<?php echo $resource_path;?>pages/manage/manage.html"><i class="icon-edit"></i> Manage</a></li>
                                <li><a href="<?php echo $resource_path;?>pages/message/message.html"><i class="icon-envelope"></i> Messages</a></li>
                                <li><a href="<?php echo $resource_path;?>pages/report/report.html"><i class="icon-signal"></i> Report</a></li>
                                <li><a href="<?php echo $resource_path;?>pages/setting/settingAccount.html"><i class="icon-cog"></i> Settings</a></li>
                            </ul>

                        </div>
                    </div>
                </li>
                <!------------- end on mobile -------------------->


            </ul>

        </div><!--/.well -->



        <div class="row-fluid">
            <!--list menu-->
            <div class="table-wrapper sidebar-nav">
                <ul class="nav nav-tabs nav-stacked">
                    <!-------------------->
                    <li><a href="<?php echo $base_url;?>/admin/pasien"><i class="icon-file"></i> <span>Pasien</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/pasien/transaksi"><i class="icon-pencil"></i> <span>Transaksi</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/pasien/schedule"><i class="icon-calendar"></i> <span>Schedule Check Up</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/pasien/update_foto"><i class="icon-camera"></i> <span>Update Foto Pasien</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/pembukuan"><i class="icon-hdd"></i> <span>Pembukuan</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/laporan"><i class="icon-download-alt"></i> <span>Laporan</span></a></li>
                    <li><a href="<?php echo $base_url;?>/admin/pasien/user"><i class="icon-user"></i> <span>User</span></a></li>
                </ul>

            </div>
            <!--/.well -->
            <!--widget date-->
            <div class="table-wrapper">

                <div class="date">
                    <span class="binds"></span>
                    <span class="month">
                        <span id="month"></span>
                        <script>

                            var d = new Date();

                            var months = new Array(12);
                            months[0] = "January";
                            months[1] = "February";
                            months[2] = "Maret";
                            months[3] = "April";
                            months[4] = "May";
                            months[5] = "Juni";
                            months[6] = "Juli";
                            months[7] = "August";
                            months[8] = "September";
                            months[9] = "October";
                            months[10] = "November";
                            months[11] = "December";


                            var x = document.getElementById("month");
                            x.innerHTML = months[d.getMonth()];

                        </script>
                    </span>

                    <h1 class="day">
                        <script>

                            var d = new Date();
                            var t = d.getDate();

                            document.write(t);

                        </script>
                    </h1>
                </div>


            </div>
        </div>

    </div>
    <!--/span-->
    <!--content center-->
    <div class="span10">

        <div class="row-fluid">


            <?php echo $output; ?>
        </div>
        <!--/span-->
        <!--content right-->

    </div>
</div>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ FOOTER ///*******************************************-->
<div class="container-fluid" id="footer">
    <div class="row-fluid">
        <div class="span4">

        </div>
        <div class="span4">
            <p>
                &copy; 2012 <a href="#">@mampang</a>
            </p>
        </div>
        <div class="span4">

        </div>
    </div>
</div>


<!--sliding info-->


<!--<div class="visible-desktop">-->
<!--    <div class="panel">-->
<!---->
<!--        <div class="row-fluid">-->
<!--            <h4>Tentang Klinik Gigi</h4>-->
<!--        </div>-->
<!--        <div class="row-fluid">-->
<!--            <div class="span3">-->
<!--                <img class="img-circle span12" src="--><?php //echo $resource_path;?><!--img/gigi/Dr_tooth.jpg" alt="drg" />-->
<!--            </div>-->
<!--            <div class="span9">-->
<!--                <p>Isi keterangan tentang klinik gigi disini</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div style="clear:both;"></div>-->
<!---->
<!--        <div class="row-fluid">-->
<!--            <h4>Social Stuff</h4>-->
<!--            <ul class="nav">-->
<!--                <li><a target="_blank" href="#" title="add me on twitter"><i class="icon-twitter"></i> Twitter</a></li>-->
<!--                <li><a target="_blank" href="#" title="add me on facebook"><i class="icon-facebook"></i> Facebook</a></li>-->
<!--                <li><a target="_blank" href="#" title="add me on google++"><i class="icon-google-plus"></i> Google++</a></li>-->
<!--                <li><a target="_blank" href="#" title="add me on linkedin"><i class="icon-linkedin"></i> Linkedin</a></li>-->
<!---->
<!--            </ul>-->
<!--        </div>-->
<!--        <div style="clear:both;"></div>-->
<!---->
<!--        <div class="row-fluid">-->
<!--            <div class="span6">-->
<!--                <h4>Change Colour </h4>-->
<!--                <ul class="nav" id="list-themes">-->
<!---->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/docs/docs.css">-->
<!--                            <span class="badge">&nbsp;</span> <span>Default</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/themes/docs2.css">-->
<!--                            <span class="badge badge-success">&nbsp;</span> <span>Green</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/themes/docs3.css">-->
<!--                            <span class="badge badge-warning">&nbsp;</span> <span>Yellow</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/themes/docs4.css">-->
<!--                            <span class="badge badge-info">&nbsp;</span> <span>Blue</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/themes/docs5.css">-->
<!--                            <span class="badge badge-inverse">&nbsp;</span> <span>Dark</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" rel="--><?php //echo $resource_path;?><!--css/themes/docs6.css">-->
<!--                            <span class="badge badge-important">&nbsp;</span> <span>Red</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="span6">-->
<!--                <h4>Change Pattern </h4>-->
<!--                <ul class="nav" id="list-themes2">-->
<!---->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternDefault"></div> <span>Default</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternWall"></div> <span>Wall</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternDirty"></div> <span>Dirty</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternDiamon"></div> <span>Diamon</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternGrid"></div> <span>Grid</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div id="patternSmooth"></div> <span>Smooth</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <a class="trigger visible-desktop" href="#">infos</a>-->
<!--</div>-->


<!--progress knob-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/knob/jquery.knob.js"></script>

<!--chart-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/chart/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/chart/chart.js"></script>

<!--calendar-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/calendar/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/calendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/calendar/calendar.js"></script>


<!--standar-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/docs.js"></script>




</body>
</html>



