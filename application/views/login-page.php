<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--docs style-->
    <link href="<?php echo $resource_path; ?>css/docs/docs.css" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico">

    <!--jquery-->
    <script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/jquery.js"></script>

</head>

<body class="login-page">

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><img src="<?php echo $resource_path;?>img/gigi/logo.png" alt="">     Login Admin</a>
            <div class="nav-collapse collapse">

            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row-fluid">
        <div class="span4">

        </div>
        <div class="span4 login-box">
            <div class="navbar">
                <div class="login-header-inner">
                    <a class="brand" href="#">Admin Panel</a>
                </div>
                <div class="login-body-inner">
                    <div class="alert login-alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Please!</strong> insert "admin/admin"
                    </div>
                    <form action="<?php echo $base_url; ?>/login/login_in" method="post" id="login-form" name="login-form-admin">
                        <div class="control-group">

                            <div class="controls">
                                <strong>Sign In</strong>
                                <br>
                                <span><?php if($error!="")echo$error; ?></span>
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="login-add-on"><i class="icon-user"></i></span>
                                    <input class="span10 login-input" type="text" placeholder="+++ username +++" id="username" name="user">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="login-add-on"><i class="icon-lock"></i></span>
                                    <input class="span10 login-input" type="password" placeholder="+++ password +++" id="password" name="pass">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="control-group">
                            <div class="controls">

                                <div class="row-fluid">
                                    <div class="span8">
                                        <label class="checkbox">
                                            <input type="checkbox"> Check me out
                                        </label>
                                    </div>
                                    <div class="span4">
                                        <button type="submit" class="btn span12 btn-primary">Sign in</button>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <hr>


                    </form>
                </div>
            </div>
        </div>
        <div class="span4">

        </div>
    </div>





</div> <!-- /container -->

<div class="container-fluid" id="footer">
    <div class="row-fluid">
        <div class="span4">

        </div>
        <div class="span4">
            <p>
                &copy; 2012 <a href="#">@bahrie_bhe</a>
            </p>
        </div>
        <div class="span4">

        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/docs.js"></script>

</body>
</html>



