
          <!-- beginning of funding -->
          <div class="container">

       <?php
       $funding_check = $this->db->get('funding')->num_rows();
       if($funding_check > 0){

        $fundings = $this->db->get('funding')->result_array();

          foreach($fundings as $funding){       

        ?>
            <div class="row investments">
                <div class="col-md-2">
                  <img src="<?php echo base_url()?>images/img-1.jpg" alt="" class="investment-icon">
                </div>
                <div class="col-md-7">
                  <h3 class="inv-title"><?php echo $funding['title'] ?></h3>
                  <p class="inv-caption"><?php// echo $funding['deadline']; ?></p>
                </div>
                <div class="col-md-3 text-center">
                    <a href="<?php echo base_url() ?>index.php/funding/apply_funding/<?php echo $funding['id'] ?>"><button class="inv-button">Apply</button></a>
                    <a><p class="inv-caption">More info</p></a>
                </div>
            </div>

           <?php } }?> 
         </div>       
    <script src="scripts/jquery.js"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
</body>
</html>