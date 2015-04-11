<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Loading Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="<?php echo $resource_path; ?>css/docs/docs.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico">

    <script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/jquery.js"></script>



    <script language=javascript>

        setTimeout("location.href='<?php echo $base_url; ?>/login'", 3000);

    </script>

</head>

<body class="loading-page">

<div class="msg">
    <span>
        <img src="<?php echo $resource_path; ?>img/gigi/brackets.png" alt="">
        <br>
        <span id="logo-font">Technicer dental Admin</span>
    </span>
    <br>
    <br>
    <br>
    <span>
        Terima Kasih
    </span>
</div>
<div class="loader_box">
    <div class="loader"></div>
</div>


<script type="text/javascript">
    var div = $("div");

    function runIt(){
        div.fadeIn('slow');
        setTimeout(showIt, 100);

    }

    runIt();

</script>





<script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $resource_path; ?>js/docs/docs.js"></script>

</body>
</html>