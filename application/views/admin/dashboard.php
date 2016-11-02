<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>eSecure</title>
		
		<!-- Bootstrap Css Files -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap-datatable.min.css">

		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/main.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="container-narrow">
	     	<div class="masthead">
	        	<ul class="nav nav-pills pull-right">
	          		<li>
	            		<div class="dropdown">
	  						<a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	    						<?php echo $_SESSION['email']?>
	    						<span class="caret"></span>
	  						</a>

	  						<ul class="dropdown-menu" aria-labelledby="dLabel">
						    	<li><a href="<?php echo base_url()?>admin/logout">Logout</a></li>
						  	</ul>
						</div>
	          		</li>
	        	</ul>
	        	<h3 class="muted">eSecure</h3>
	      	</div>

	      	<hr>

			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Ip</th>
		                <th>Datetime</th>
		                <th>Unique ID</th>
		                <th>Used</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th>Ip</th>
		                <th>Datetime</th>
		                <th>Unique ID</th>
		                <th>Used</th>
		            </tr>
		        </tfoot>
		        <tbody>
		            <?php foreach ($security_texts as $security_text) { ?>
			            <tr>
			                <td><?php echo $security_text['ip'] ?></td>
			                <td><?php echo date('d M Y H:s', strtotime($security_text['datetime'])) ?></td>
			                <td><?php echo $security_text['unique_id'] ?></td>
			                <td><?php echo ($security_text['used']) ? 'Yes':'No' ?></td>
			            </tr>
			        <?php } ?>
	      		</tbody>
	      	</table>

	      	<hr>

	      
			<div class="footer">
				<p>&copy; Company 2013</p>
			</div>

	    </div> <!-- /container -->

	  	<!-- Jquery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
		<!-- Jquery Data Table -->
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-datatable.min.js"></script>
		<!-- Bootstrap Data Table -->
		<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-datatable.min.js"></script>	
		<!-- Base url defined -->
		<script type="text/javascript"> var base_url = "<?php echo base_url()?>";</script>
		<!-- Custom js -->
		<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
	</body>
</html>