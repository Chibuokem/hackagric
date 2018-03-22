
<form class=" login-form" id="other_details" action="<?php echo base_url(); ?>index.php/register/register_product" method="post" enctype="multipart/form-data">
				
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

			  
			  
			  
			  <div class="form-group" style="margin-top: 30px;">
			    <div class="col-sm-12">
			      <button type="submit" class="btn btn-info default pull-right" id="continue"> Register Product</button>
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

 
</body>

</html>
