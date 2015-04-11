<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Client - Technicer dental - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <!--docs-->
    <!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/docs/docs.css">



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

                    </ul>
                </form>


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


</body>
</html>



