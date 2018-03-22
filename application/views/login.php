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
			<a href=""><img src="" alt="logo" class="img-responsive text-center"></a>
			
			<div id="message">
			</div>	

			<h4 class="text-center" style="margin-bottom: 70px;">LOGIN</h4>

			<form class="form-horizontal login-form">
				<div class="login-form-div text-center col-md-2"><img src="<?php echo base_url(); ?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="email" class="form-control no-border" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="password" class="form-control no-border" id="password" placeholder="Password">
			    </div>
			  </div>
			  
			  
			 
			  <div class="form-group">
			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="login"> LOGIN</button>
			    </div>
			  </div>
			</form>
		</div>
		
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

	<script type="text/javascript">
	$("#login").click(function(e){
		e.preventDefault();

		var email = $("#email").val();
		var password = $("#password").val();
			

		if(email ==""){
			alert('please enter email');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Please enter email');
		}
		
		else if(password ==""){
			alert('Please enter password');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Please enter password');
		}

		
		else{
			

			data = {email:email, password:password};

		$.ajax('<?php echo base_url();?>index.php/login/check_user',{
			type : 'post',
			data : data,
			success: function(data){
				if(data==true){
			$("#message").addClass('alert alert-success');
			$("#message").html(data);

			$("#Login").html('Logging in...');

				window.location.href='<?php echo base_url();?>index.php/login/direct_user';
				}
				else{
					alert(data);
				}	

			},
			error : function(jqXHR,textStatus,errorThrown){
				 if(textStatus ='error'){
				 	alert('Request not completed');
				 }
				$("#login").html('Failed');
			},
			beforeSend :function(){

			$("#message").removeClass('alert alert-danger');
			$("#message").html('');

			$("#login").html('Sending..');
			},
		});

		}
		
	});
</script>




	
</body>
</html>