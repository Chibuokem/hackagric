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
			<h4 class="text-center" style="margin-bottom: 70px;">PRODUCT REGISTRATION</h4>
			<form class="form-horizontal login-form" id="other_details" action="<?php echo base_url(); ?>index.php/register/register_product" method="post" enctype="multipart/form-data">
				<div class="login-form-div col-md-2"><img src="<?php echo base_url();?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Product Name</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="product_name" id="product_name" placeholder="Enter your product name">
			    </div>
			  </div>

			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Price</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="price" id="price" placeholder="Enter your product price">
			    </div>
			  </div>

			  <div class="form-group" style="text-align: left;">
			    <div class="col-sm-12 " >
			<select name="category" required class="form-control">
				<option value="">Select Category</option>
				<option value="fish farm">Fish Farm</option>
				<option value="diary farm">Diary Farm</option>
				<option value="poultry farm">Poultry Farm</option>
				<option value="Meat farm">Meat Farm</option>
				<option value="crop farm">Crop Farm</option>
				<option value="Pig farm">Pig Farm</option>
			</select>
			    </div>
			  </div>
        <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
    	      <label class="checkbox-inline">Product Image
    				  <input type="file" id="file" name="userfile" >
    				</label>
			    </div>
			  </div>

			   <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
    	      	<select name="farm_id" class="form-control">
    	      		<option value="">Select Farm</option>

    	      		<?php $farms = $this->db->get_where('farms',array('user_id'=>$this->sesion->userdata('user_id')))->row_array();
    	      			foreach ($farms as $farm){
    	      		 ?>
    	      		
    	      			<option value="<?php echo $farm['id']; ?>"><?php echo $farm['id']; ?>
    	      				
    	      			</option>
    	      			<?php } ?>

    	      	</select>
			    </div>
			  </div>
			  
			  
			  <div class="form-group" style="margin-top: 30px;">
			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="continue"> Register Product</button>
			    </div>

			  </div>
			</form>
		</div>
