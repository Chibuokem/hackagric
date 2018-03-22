
<div class="col-md-4 col-md-offset-4 text-center" >
			<h4 class="text-center" style="margin-bottom: 70px;">PROFILE IDENTIFICATION</h4>
			<form class="form-horizontal login-form" id="other_details">
				<div class="login-form-div col-md-2"><img src="<?php echo base_url();?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>
			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Full Name</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="name" id="name" placeholder="">
			    </div>
			  </div>
			  <div class="form-group" style="text-align: left;">
			    <div class="col-sm-12 " >
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="farmer" name="type" value="farmer">I am a Farmer
    				</label>
			    </div>
			  </div>
        <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="investor" name="type" value="investor">I am an Investor
    				</label>
			    </div>
			  </div>
			  <div class="form-group" >
			    <div class="col-sm-12 " style="text-align: left;">
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="mentor" name="type" value="mentor">I am a Mentor
    				</label>
			    </div>
			  </div>
			  <div class="form-group" >
			    <div class="col-sm-12 " style="text-align: left;">
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="organization" name="organization" value="option1">I am an Organization
    				</label>
			    </div>
			  </div>
			  
			  <div class="form-group" style="margin-top: 30px;">
			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="continue"> Continue</button>
			    </div>

			  </div>
			</form>
		</div>
<script type="text/javascript">
	$("#continue").click(function(e){
		e.preventDefault();
		var data = $("#other_details").serialize();

		$.ajax('<?php echo base_url();?>index.php/register/register_continue',{
			type : 'post',
			data : data,
			success: function(data){
			$("#message").addClass('alert alert-success');
			$("#message").html(data);

			$("#continue").html('Sent');

			 $("#form-content").load("<?php echo base_url() ?>index.php/process/load_form_3", function(responseTxt, statusTxt, xhr){
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

	});
</script>