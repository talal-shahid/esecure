
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Login::Admin</title>


			<!-- Bootstrap Css Files -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">

		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/login.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

 	<body>
	    <div class="container">
	    	<div class="alert alert-danger fade in display-none">
	    		
			</div>

			<div class="alert alert-success fade in display-none">
	    		
			</div>
			<form class="form-signin" id="login-form">
				<h1 class="form-signin-heading">Admin Login</h1>
				<input type="email" name="email_address" class="form-control" placeholder="Email address" required autofocus>
				<input type="password" name="password" class="form-control" placeholder="Password" required>

				<button class="btn btn-large btn-success btn-block" type="submit">Sign in</button>
			</form>
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
