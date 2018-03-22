
	
	        <form class="form-horizontal login-form" id="update-form" action="<?php echo base_url(); ?>index.php/process/update_profile" method="post">
	        	<br/>

				
				<p class="text-center">Profile<img src="<?php echo base_url(); ?>img/profile-pic.svg" class="img-responsive text-center"></p>
					
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="email" value="<?php echo $profile->email;?>" class="form-control no-border" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" value="<?php echo $profile->name; ?>" class="form-control no-border" id="name" name="name" placeholder="Enter Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" value="<?php echo $profile->phone; ?>" class="form-control no-border" id="phone" name="phone" placeholder="Enter Phone Number">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" name="gender" value="<?php echo $profile->gender; ?>" class="form-control no-border" id="gender"  placeholder="Gender">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			    	<label for="bio">Biography</label>
			    	
			      <textarea name="bio" id="bio" class="form-control"><?php echo $profile->bio;?></textarea> 
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-12">
			      <input type="text" class="form-control " name="state" id="state" placeholder="State" value="<?php echo $profile->state;?>">
			    </div>
			  </div>
			  

			  <div class="form-group">
			    <div class="col-sm-12">
			      
			      <button href="" class="btn btn-info default pull-right" id="update">Update</button>
			    </div>
			  </div>
			</form>
<!--outer page ends here-->	
</div>
  <!-- hi-->
  </div>

       </div>

        <!--welcome div ends here-->

                  
                  </div>
                  </div>
                  </div>


              </div>
            </div>
        </section>
        </div>
        
 <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
 <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>

 <script type="text/javascript">
 	$("#update").click(function(e){
 		e.preventDefault();

 		var data = $("#update-form").serialize();
 		$.ajax("<?php echo base_url(); ?>index.php/process/update_profile",{
 			data:data,
 			type:'post',
 			beforeSend:function(data){
 				$("#update").html('Updating...');
 			},
 			success:function(data){
 				
 				alert('Profile updated');
 				$("#update").html('Updated');
 				 				
 			},
 			error:function(data){
 				alert('Profile update failed');
 			}
 		});
 	});
 </script>
</body>

</html>
