<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Open Farm: Technocrats</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page-styles.css">

</head>
<body>
	<div class="container-fluid" id="form-content" style="padding-bottom: 40px;">
<div class="col-md-4 col-md-offset-4 text-center" >
			<h4 class="text-center" style="margin-bottom: 70px;">Add tutorials</h4>
			<form class="form-horizontal login-form" id="other_details" action="<?php echo base_url(); ?>index.php/tutorials/add_tutorial" method="post" enctype="multipart/form-data">
				<div class="login-form-div col-md-2"><img src="<?php echo base_url();?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Course Title</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="course_title" id="title" placeholder="Enter title">
			    </div>
			  </div>

				<div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Video Link</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="video_link" id="video_link" placeholder="Enter video link">
			    </div>
			  </div>


			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Description</label>
			    <div class="col-sm-12">
			    	<label>Description</label>
			      <textarea name="description" class="form-control"></textarea>
			    </div>
			  </div>

			  <div class="form-group" style="text-align: left;">
			    <div class="col-sm-12 " >
			    	<label>Image </label>
					<input type="file" name="userfile">
			    </div>
			  </div>
             

			 	  
			  
			  <div class="form-group" style="margin-top: 30px;">
			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="continue">Add Tutorials</button>
			    </div>

			  </div>
			</form>
		</div>
