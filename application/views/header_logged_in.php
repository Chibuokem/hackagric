
<!DOCTYPE html>
<html lang="en">



<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Open Farm: Technocrat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page-styles.css">

</head>
<body>
	<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-md-4 col-xs-12 ">
				<span><img src="<?php echo base_url(); ?>img/connect-icon.svg"></span>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="row">
					<div class="col-xs-6" style="text-overflow: none; float: left;">
						<span style="float: left"></span>
						<p style="float: right">11, Elekahia Road Port Harcourt</p>
					</div>
					<div class="col-xs-6" style="text-overflow: none; float: right;">
						<p>info@openfarm.com.ng</p>
					</div>
				</div>
			</div>
			<?php 

				$user_id =$this->session->userdata('user_id');
				if($user_id !=''){
				$name = $this->db->get_where('users',array('id'=>$user_id))->row()->name;
				echo $name;
			}
			?>

			<div class="col-md-4 col-xs-6 hidden-xs">
				<button class="btn btn-success">Try Premium</button>
				<a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary pull-right">LOGOUT</a>
			</div>
		</div>
		
	</div>
	<header >
		<nav class="navbar navbar-default" style="background-color: #09c; margin-bottom: unset; margin-right: unset; ">
		  <div class="container" style="padding-right: unset;margin-right: unset;">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-right: 0;">
		      <ul class="nav navbar-nav text-center nav-links-cont" >
		        <li class="active"><a href="<?php echo base_url() ?>index.php/farmers/dashboard">Dashboard<span class="sr-only">(current)</span></a></li>
		        <li ><a href="<?php echo base_url() ?>index.php/funding">Funding</a></li>
		        <li><a href="<?php echo base_url() ?>index.php/tutorials">Training</a></li>
		        <li><a href="<?php echo base_url() ?>index.php/market">Marketplace</a></li>
		        <li><a href="#">Contact Us</a></li>
		      </ul>
		      <div class="search col-md-4 nav hidden-xs" style="background-color: #08728f; float: right; color: #fff; ">
		      	<input class="col-xs-10 search" type="text" name="" style="float: left; background-color: #08728f; color: #fff;border: none; padding: 15px 30px " placeholder="Search for a Product/Farmer ">
		      	<!-- <span style="float: right;" class="col-xs-2"><i class="fa fa-search"></i></span> -->
		      </div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>