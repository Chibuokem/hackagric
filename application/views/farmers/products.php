
 <!--product starts here-->
<h3>Products</h3>
  <div class="container-fluid">
        
        <?php
        $user_id = $this->session->userdata('user_id');
              $products = $this->db->get_where('product_details',array('user_id'=>$user_id))->row_array();
              
              
         ?>
        <div class="row">
         <?php  if(count($products) > 0){

          foreach ($products as $product){
          ?>
            <div class="col-md-4 prices">
                <img src="<?php echo base_url(); ?>images/rye.jpg" alt="" class="prod-img">
                <h3 class="product-name"><?php //echo $product['name']; ?></h3>
                <p class="farm-name">
                  <?php 
                  $user_id = $this->session->userdata('user_id');
                  echo $this->db->get_where('product_details',array('user_id'=>$user_id))->row()->name;
                  ?>
                </p> 
                <p class="price"> <span class="currency">N</span>200</p>
            </div>
            
            
            <?php } } ?>
        </div>
    </div>
  <!--product ends here-->


   <!--side div ends here -->
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
        


 <script src="<?php echo base_url(); ?>/js/jquery-3.2.1.min.js"></script>
 
 <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
</body>

</html>
