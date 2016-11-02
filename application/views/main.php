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

	      	<div class="jumbotron">
	    
				<h1>Secure your data here</h1>
	        	<p class="lead">Type your text in the textarea and click Secure to proceed</p>
	        	<textarea class="form-control my-text" placeholder="Type your text here"></textarea>
	        	<button class="btn btn-large btn-success display-none" id="secure">Secure</button>
	      	</div>

	      	<hr>

	      	<div class="row-fluid details display-none">
		        <div class="span6">
	          		<h4>Text ID</h4>
	          		<p id="text-id"></p>
	          		<h4>Date Create</h4>
	          		<p id="date-created"></p>
		        </div>

		        <div class="span6">
	          		<h4>Used</h4>
          			<p id="is-used"></p>
	          		<h4>Access Link</h4>
	          		<a id="access_link" href="#"></a>
		        </div>
	      	</div>

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