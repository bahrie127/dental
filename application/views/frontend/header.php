<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ahli Gigi - Admin</title>
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
            <a class="brand" href="#"><img src="<?php echo $resource_path;?>img/gigi/logo.png" alt=""></a>

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
    <div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#" align="center">Home</a>
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Bracket <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="http://google.com">Action</a></li>
                        <li><a tabindex="-1" href="#anotherAction">Another action</a></li>
                        <li><a tabindex="-1" href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
</div>
<br>
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

    <div class="row-fluid">
        
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
<div id="content-center" class="span7">

    <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item">
                    <img src="<?php echo $resource_path;?>img/gigi/a.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Metal Brackets</h4>
                      <p>
                                                                        Metal bracket (stainless steel) adalah tipe bracket
                                                                        yang paling banyak digunakan dan paling murah harganya. 
                                                                        Dalam pemakaianya dapat ditambahkan elastik dari karet yang warna
                                                                        dan bentuknya bermacam-macam sehingga cocok bagi mereka yang ingin 
                                                                        tampil beda dan atraktif.
                                                                    </p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo $resource_path;?>img/gigi/b.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item active">
                    <img src="<?php echo $resource_path;?>img/gigi/c.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Metal Brackets</h4>
                      <p>
                                                                        Metal bracket (stainless steel) adalah tipe bracket
                                                                        yang paling banyak digunakan dan paling murah harganya. 
                                                                        Dalam pemakaianya dapat ditambahkan elastik dari karet yang warna
                                                                        dan bentuknya bermacam-macam sehingga cocok bagi mereka yang ingin 
                                                                        tampil beda dan atraktif.
                                                                    </p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

    <!--chat-->
    <div class="row-fluid">
        <div class="span12">
            <div class="table-wrapper">

                <div class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#chat">
                                <i class="icon-comments"></i> Comment
                                <ul class="nav pull-right">
                                    <li class="close">
                                        <i class="icon-minus"></i>
                                    </li>
                                </ul>
                            </a>
                        </div>
                        <div id="chat" class="accordion-body in collapse" style="height: auto;">
                            <div class="accordion-inner">
                                <div class="row-fluid">


                                    <ol>
                                        <li class="comment">
                                            <div class="comment-meta"><img src="<?php echo $resource_path;?>img/users/user4.png" width="80" height="80" alt="Ben Amstrong" class="img-polaroid">
                                                <h4>Ben Amstrong</h4>
                                                <span>March 2, 2012</span>
                                            </div>
                                            <blockquote>
                                                <p>Yeah, I use HTML5 so that I can use a conditional &lt;html&gt; tag dependant on what version of IE the user has.  I use the rounded corners, gradients, and shadows from CSS3.  The whole object of this is to be able to do this without using images for the chat bubbles.</p>
                                            </blockquote>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-meta"><img src="<?php echo $resource_path;?>img/users/user3.png" width="80" height="80" alt="Jane Jenivver" class="img-polaroid">
                                                <h4>Jane Jenivver</h4>
                                                <span>March 2, 2012</span>
                                            </div>
                                            <blockquote>
                                                <p>This is pretty cool.  What else is being used from the new CSS3?  I did notice in the source code that you are using HTML5...</p>
                                            </blockquote>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-meta"><img src="<?php echo $resource_path;?>img/users/user4.png" width="80" height="80" alt="Ben Amstrong" class="img-polaroid">
                                                <h4>Ben Amstrong</h4>
                                                <span>March 3, 2012</span>
                                            </div>
                                            <blockquote>
                                                <p>Yep.  Kind of cool.  You'll notice that the avatars are turned slightly to the left and the chat bubbles use no images.</p>
                                            </blockquote>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-meta"><img src="<?php echo $resource_path;?>img/users/user3.png" width="80" height="80" alt="Jane Jenivver" class="img-polaroid">
                                                <h4>Jane Jenivver</h4>
                                                <span>March 4, 2012</span>
                                            </div>
                                            <blockquote>
                                                <p>So this is the way we would create some chat bubbles using HTML5 and CSS3, huh?</p>
                                            </blockquote>
                                        </li>
                                    </ol>
                                    <div class="row-fluid">
                                        <div class="span2">

                                        </div>
                                        <div class="span10">
                                            <textarea rows="3" class="span12" placeholder="Comment in here..."></textarea>
                                            <br>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!--/span-->
<!--content right-->
<div id="content-right" class="span3">

<div class="sidebar-nav" id="sidebar">


<!--latest news-->
<div class="row-fluid">
    <div class="table-wrapper">

        <div class="row-fluid">
            <div class="span12">


                <div class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                               href="#layout1">
                                <i class="icon-book"></i> LATEST NEWS
                                <ul class="nav pull-right">
                                    <li class="close">
                                        <i class="icon-minus"></i>
                                    </li>
                                </ul>
                            </a>
                        </div>
                        <div id="layout1" class="accordion-body in collapse" style="height: auto;">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <table class="table-make-wrapper">

                                            <tr class="table-row">
                                                <td>

                                                    <div class="accordion" id="accordion2">
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle" data-toggle="collapse"
                                                                   data-parent="#accordion2" href="#collapseOne">
                                                                    METAL BRACKET
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="accordion-body collapse in">
                                                                <div class="accordion-inner">
                                                                    <p>
                                                                        Metal bracket (stainless steel) adalah tipe bracket
                                                                        yang paling banyak digunakan dan paling murah harganya. 
                                                                        Dalam pemakaianya dapat ditambahkan elastik dari karet yang warna
                                                                        dan bentuknya bermacam-macam sehingga cocok bagi mereka yang ingin 
                                                                        tampil beda dan atraktif.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle" data-toggle="collapse"
                                                                   data-parent="#accordion2" href="#collapseTwo">
                                                                    CERAMIC BRACKET
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    <p>
                                                                       Ceramic bracket adalah bracket yang terbuat dari ceramic yang transparant.
                                                                       Bracket ini dalam pemakaianya tidak terlalu kelihatan mencolok sebagaimana 
                                                                       bracket metal sehingga cocok dipakai bagi mereka yang mengutamakan estetika. 
                                                                       Cara kerja dan hasil perawatan sama saja dengan bracket metal.
                                                                    </p>
                                                                    <ul style="list-style: circle;">
                                                                        <li>Lorem ipsum dolor sit amet</li>
                                                                        <li>Consectetur adipiscing elit</li>
                                                                        <li>Integer molestie lorem at massa</li>
                                                                        <li>Facilisis in pretium nisl aliquet</li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle" data-toggle="collapse"
                                                                   data-parent="#accordion2" href="#collapseThree">
                                                                    Section 3
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    <p>
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod.
                                                                    </p>

                                                                    <p>
                                                                        Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa nesciunt laborum
                                                                        eiusmod.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
</div>

</div>
</div>
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
                &copy; 2012 <a href="#">@buncit 12</a>
            </p>
        </div>
        <div class="span4">

        </div>
    </div>
</div>

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



