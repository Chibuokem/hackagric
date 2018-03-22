
<!DOCTYPE html>
<html>
    <head>
            
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Open Farms</title>
    
        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet">
    
    </head>
<body>
<!-- end container here -->
<!-- nav bar header begins here -->

<div class="container">
        <section>
            
       <div class="row">
          <div class="col-lg-3">
             <div class="panel panel-default text-center">
               <div class="panel-body">
               	<!--row starts here -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
                         <img src="<?php echo base_url();?>img/cloud-cover.svg" class="img-responsive pic">

                     </div>

					 <div class="col-lg-6 col-md-6 col-sm-12">
					       
					     <p class="temp">27<sup>&deg</sup></p>
					  </div>

              </div>
              <!--row ends here -->

            <div class="row">
        
                  <div class="col-lg-12">
                       <p class="line">
                       It will be sunny today. See recommended best farm practice for different crops today.<a href=""><i>read more</i></a>
                       </p>
        
          		</div>
          </div>	

			<!--row starts here -->
          <div class="row">
                
               <div class="col-lg-6">
                   <h4>Temparature</h4>
                   <h6>HIGH 46<sup>&deg</sup></h6>
                
               </div>

                 <div class="col-lg-6">
                        <h6 class="low colour">low 27<sup>&deg</sup></h6>
          
                </div>
			</div>
			<!--row ends  here -->

				<!--row starts here-->
                  <div class="row">
                        
                      <div class="col-lg-6 humidity">
                         <h4>Humidity</h4>
                        <p>RISING 87%</p>
                        
                      </div>
        
                          <div class="col-lg-6">
                                
                         </div>
                  </div>
                    <!--row ends here-->


                   <div class="row">
                                
                       <div class="col-lg-6 humidity">
                           <h4>PRESSURE</h4>
                            <h6>HIGH 30.90</h6>

                                
                        </div>
                
                       <div class="col-lg-6">
                       <h6 class="low colour">CURRENT 30.90<sup>&deg</h6>
                                        
                           </div>
                    </div>
            
    
                       <div class="row">
                                        
                             <div class="col-lg-6 humidity">
                                <h4>RAINFALL</h4>
                                <h6>COMUL 0"</h6>
        
                                        
                             </div>
                        
                           <div class="col-lg-6">
                           <h6 class="low colour">CURRENT 0"</h6>
                                                
                          </div>
                      </div>

                        <div class="row">
                                                
                            <div class="col-lg-6 humidity">
                                 <h4>WINDSPEED</h4>
                                   <h6>AVG</h6>
                                   <h6>3</h6>
                             <h6>3mph  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  315<sup>&deg</h6>
                
                                                
                          </div>
                                
                          <div class="col-lg-6">
                             <h6 class="low colour">CURRENT 0"</h6>
                               <h4 class="colour">5</h4>
                                <h6 class="colour">AVG</h6>
                                <h6 class="colour">NW</h6>
                                                        
                         </div>
                    </div>
                                            
       	</div>
                     

                  </div>
                  </div>
               
				<!--inner page div starts here-->
                  <div class="col-lg-9 col-md">

                   <div class="panel panel-default">
                     <div class="panel-body">

                   <?php  $user_id =$this->session->userdata('user_id');?>
                        <?php 
                          if($user_id !=''){
                        ?>
                            <p>Welcome <a href="<?php echo base_url(); ?>index.php/<?=$user_type_link?>/view_profile"><?php 
				$name = $this->db->get_where('users',array('id'=>$user_id))->row()->name;
				echo $name; ?></a></p>
        <?php } ?>

                                  <div class="row">

                     <div class="col-lg-4">
                           <div class="panel panel-default text-center high">
                             <div class="panel-body">
                                   <img src="<?php echo base_url();?>img/messages.svg" class="img-responsive pics">
                               <h5><a href="<?php echo base_url() ?>index.php/farmers/chat">messages</a></h5>
                       </div>
                   </div>
               </div>

             <div class="col-lg-4 col-md-4">
                    <div class="panel panel-default text-center higha">
                           <div class="panel-body">
                                  <img src="<?php echo base_url();?>img/notifications.svg" class="img-responsive pics">
                                           <h5>notifications</h5>
                                                                
                                </div>
                        </div>
               </div>

		
			<!--running application starts here -->
            <div class="col-lg-4">
               <div class="panel panel-default text-center high">
                     <div class="panel-body">
                     <img src="<?php echo base_url();?>img/access-fund-icon.svg" class="img-responsive pics">
                   <h5><a href="<?php echo base_url(); ?>index.php/funding">Funding applications</h5></a>
                </div>
              </div>
           </div>
         <!--running appication ends here -->  


        </div>

        <!--row starts here-->
                                
       <div class="row">
        
	<!--show case and sell starts here-->
     <div class="col-lg-4">
    <div class="panel panel-default text-center high">
  <div class="panel-body">
        <img src="<?php echo base_url(); ?>img/showcase.svg" class="img-responsive pics">
             <h5><a href="<?php echo base_url() ?>index.php/farmers/products">Products</a></h5>
             </div>
        </div>
      </div>
    <!--show case and sell starts here-->  
                   
		<!--trainings starts here-->
           <div class="col-lg-4">
                    <div class="panel panel-default text-center high">
                  <div class="panel-body">
                        <img src="<?php echo base_url(); ?>img/notifications.svg" class="img-responsive pics">
                             <h5><a href="<?php echo base_url(); ?>index.php/tutorials">Academy</a></h5>
                   </div>
              </div>
          </div>
         <!--training ends here --> 

	<!--storage starts here -->

	<!--storage starts here -->
	        <div class="col-lg-4">
	           <div class="panel panel-default text-center high">
	                  <div class="panel-body">
                    
                      <img src="<?php echo base_url(); ?>img/connect-icon.svg" class="img-responsive pics">
	                 <span class="glyphicon glyphicon-floppy-saved pics"></span>
	                   <h5>Storage Facility</h5>
	             </div>
	       </div>
	     </div>
     <!--storage ends here -->
                                                                                                                                                                                                                                          
     </div>

   </div>