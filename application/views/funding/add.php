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
	 <nav class="navbar navbar-inverse navbar-fixed-top">
	 	
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OpenFarm</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/admin/funding/upload">Upload</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/admin/funding/view"></a>View</li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav> 


    <form name="opportunities_form" class="form-horizontal" enctype="multipart/form-data" id="opportunities_form">
		<div class="row">

			<div class="form-group">	
			<div class="col-md-4 col-sm-12">
				<input type="text" name="title" class="form-control">
			</div>

		</div>

			<div class="col-md-4 col-sm-12">
				<input type="date" name="date" class="form-control">
			</div>

			<div class="col-md-4 col-sm-12">
				<select name="state" class="form-control">
					<option value="state">Rivers</option>
					<option value="state">Delta</option>
					<option value="state">Lagos</option>
				
				</select>
			</div>	




		</div>	


		<div class="row">

			<div class="form-group">	
			<div class="col-md-6 col-sm-12">
				<label>Upload Picture</label>
				<input type="file" name="userfile" >
			</div>

		</div>

			<div class="col-md-6 col-sm-12">
				<textarea name="description" placeholder="Enter description"></textarea>
			</div>

				


			

		</div>
	</form>	






  </div>
</div>
	
</body>
</html>

... 