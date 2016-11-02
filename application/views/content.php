<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>eSecure</title>
	<!-- Bootstrap Css Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">
	

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/main.css">
</head>
<body>
	<div class="container-narrow">

    <div class="masthead">
        <ul class="nav nav-pills pull-right">
            <li><a href="<?php echo base_url()?>admin">Admin Login</a></li>
        </ul>
        <h3 class="muted">eSecure</h3>
    </div>

    <hr>
        <?php if(isset($content) && !empty($content) && $content['used']==0){?>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Success<strong> Here goes your content</h3>
                </div>
                <div class="panel-body">
                    <?php echo $content['text'] ?>
                </div>
            </div>
        <?php }else{ ?>

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Failed<strong> Something went wrong</h3>
                </div>
                <div class="panel-body">Your token is either wrong or expired</div>
            </div>

        <?php } ?>  
    <hr>

    <div class="footer">
        <p>&copy; Company 2013</p>
    </div>

    </div> <!-- /container -->

  <!-- Jquery -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<!-- Base url defined -->
	<script type="text/javascript"> var base_url = "<?php echo base_url()?>";</script>
	<!-- Custom js -->
	<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
</body>
</html>