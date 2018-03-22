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

			<h4 class="text-center" style="margin-bottom: 70px;">CREATE PROFILE</h4>

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
			      <input type="password" class="form-control no-border" id="confirm_password" placeholder="Password Again">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" id="state" placeholder="State">
			    </div>
			  </div>
			  <p class="justify">By clicking Register, you are indicating that you have read and agree to the <span style="color: blue;"><a href="">Terms and Conditions</a></span>  of using this service.</p>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <a href="<?php echo base_url() ?>index.php/login" id="no" class="btn btn-default pull-left"> Login</a>
			      <button href="" class="btn btn-info default pull-right" id="register"> Register</button>
			    </div>
			  </div>
			</form>
		</div>
		
	</div>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

	<script type="text/javascript">
	$("#register").click(function(e){
		e.preventDefault();

		var email = $("#email").val();
		var password = $("#password").val();
		var confirm_password = $("#confirm_password").val();
		var state = $("#state").val();
		

		if(email ==""){
			alert('please enter email');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Please enter email');
		}
		else if(state ==""){
			alert('Please enter state');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Please enter state');
		}
		else if(password ==""){
			alert('Please enter password');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Please enter password');
		}

		else if(password != confirm_password){
			alert('Passwords dont match');
			$("#message").addClass('alert alert-danger');
			$("#message").html('Passwords dont match');
		}
		else{
			

			data = {email:email, password:password, state:state, confirm_password:confirm_password};

		$.ajax('<?php echo base_url();?>index.php/register/inital_registration',{
			type : 'post',
			data : data,
			success: function(data){
			$("#message").addClass('alert alert-success');
			$("#message").html(data);

			$("#Register").html('Sent');

			 $("#form-content").load("<?php echo base_url() ?>index.php/process/load_form_2", function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success")
            //alert("External content loaded successfully!");
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
    });

			},
			error : function(jqXHR,textStatus,errorThrown){
				 if(textStatus ='error'){
				 	alert('Request not completed');
				 }
				$("#register").html('Failed');
			},
			beforeSend :function(){

			$("#message").removeClass('alert alert-danger');
			$("#message").html('');

			$("#register").html('Sending..');
			},
		});

		}
		
	});
</script>

<script type="text/javascript">
	$("#continue1").click(function(e){
		e.preventDefault();
		var data = $("#other_details").serialize();

		$.ajax('<?php echo base_url();?>index.php/register/register_continue',{
			type : 'post',
			data : data,
			success: function(data){
			$("#message").addClass('alert alert-success');
			$("#message").html(data);

			$("#continue").html('Sent');

			 $("#form-content").load("<?php echo base_url() ?>index.php/register/register_continue2", function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success")
            //alert("External content loaded successfully!");
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
    });

			},
			error : function(jqXHR,textStatus,errorThrown){
				 if(textStatus ='error'){
				 	alert('Request not completed');
				 }
				$("#continue").html('Failed');
			},
			beforeSend :function(){

			$("#message").removeClass('alert alert-danger');
			$("#message").html('');

			$("#continue").html('Sending..');
			},
		});



	}
</script>	


	
</body>
</html>