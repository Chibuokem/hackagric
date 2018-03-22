
         <div class="col-md-4 col-md-offset-4 text-center" >
			<h4 class="text-center" style="margin-bottom: 70px;"><?php $user_id = $this->session->userdata('user_id'); 
				echo $this->db->get_where('users',array('id'=>$user_id))->row()->name;

			?></h4>
			<form class="form-horizontal login-form" id="other_details" method="post" action="<?php echo base_url(); ?>index.php/register/register_continue2">
				<div class="login-form-div col-md-2"><img src="<?php echo base_url();?>img/profile-pic.svg" class="img-responsive text-center login-profile-pic"></div>

			  <div class="form-group" style="text-align: left;">
			  	<label for="name" class="control-label" ">Phone Number</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control no-border" name="phone" id="phone" placeholder="">
			    </div>
			  </div>
			  

			  <div class="form-group" style="text-align: left;">
			    <div class="col-sm-12 " >
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="male" name="gender" value="male">Male
    				</label>
			    </div>
			  </div>
          <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
    	      <label class="checkbox-inline">
    				  <input type="checkbox" id="female" name="gender" value="female">Female
    				</label>
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
				
				<label class="">Bio</label>
    	      <textarea name="bio" id="bio" class="form-control"></textarea>
    	  

			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-12 " style="text-align: left;">
				
				<label class="">Address</label>
    	      <textarea name="address" id="address" class="form-control"></textarea>
    	  

			    </div>
			  </div>

			  <div class="form-group" style="margin-top: 30px;">
			

			    <div class="col-sm-12">
			      <button href="" class="btn btn-info default pull-right" id="continue"> Continue</button>
			    </div>

			  </div>

			</form>
		</div>
