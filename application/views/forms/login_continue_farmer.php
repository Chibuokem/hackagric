<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Open Farm: Technocrat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/page-styles.css">

</head>
<body>
	<div class="container-fluid" id="form-content" style="padding-bottom: 40px;">
            <div class="col-md-4 col-md-offset-4 text-center" >
			<h4 class="text-center" style="margin-bottom: 70px;"><?php $user_id = $this->session->userdata('user_id');
				echo $this->db->get_where('users',array('id'=> $user_id))->row()->name;
			  ?></h4>
			<form class="form-horizontal login-form" id="data" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>index.php/process/register_farm">
				<div class="login-form-div col-md-2"><img src="<?php echo base_url();?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Name of Farm</label>
			    <div class="col-sm-12">
			      <input type="text" name="name" class="form-control no-border" name="farm_name" id="farm_name" placeholder="">
			    </div>
			  </div>

			<div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Location</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="location" id="location" placeholder="Enter Location of farm">
			    </div>
			  </div>

			  <div class="form-group" style="text-align: left;">
			    <div class="col-sm-12 " >
    	      <label class="checkbox-inline">
    				  Farm Image<input type="file" id="userfile" name="userfile" >
    				</label>
			    </div>
			  </div>
        
			  
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">ROI</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="roi" id="roi" placeholder="ROI in 6months">

			    </div>
			  </div>
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Annual Sales Voume</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="" id="" placeholder="Annual sales volume">

			    </div>
			  </div>

			<div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Annual Gross Revenue</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="" id="" placeholder="Annual Gross Revenue">

			    </div>
			  </div>

			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Location</label>
			    <div class="col-sm-12">
			      <textarea type="text" class="form-control no-border" name="description" id="description" placeholder="location"></textarea>
			    </div>
			  </div>
			  
			  <div class="form-group" style="margin-top: 30px;">
			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="continue"> Save</button>
			    </div>

			  </div>
			</form>
		</div>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

<script>
	
	$("form#data").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);

    $.ajax({
        url: "<?php echo base_url()?>index.php/process/register_farm",
        type: 'POST',
        data: formData,
        success: function (data) {
        	if(data==true){
        		alert("Profile Updated Sucessfully");

        		window.location.href ="<?php echo base_url();?>index.php/farmers/dashboard";
        	}

            
        },
        beforeSend:function(){
        	$("#continue").html('Sending..');
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

</script>	