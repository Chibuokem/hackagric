<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">    
    <!-- Bootstrap CSS     -->
    <link rel="stylesheet" href="<?php echo base_url();?>css2/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css2/main.css">

    <title>Open Farm</title>
</head>
<body>
    <div class="container-fluid mainHeader">
        <div class="row">
            <div class="col-8 col-md-7">
                <img src="<?php echo base_url();?>images/logo.svg" class="logo" alt="Open Farm Logo">
            </div>
               

            <?php
              if($this->session->userdata('user_id') !=''){
  
             ?>
            <div class="col-2 col-md-2">
                <a href="<?php echo base_url(); ?>index.php/login/logout"><button class="btn btn-primary">Logout</button></a>
            </div>
           <?php } else{?>
            <div class="col-2 col-md-2">
                <a href="<?php echo base_url(); ?>index.php/register"><button class="btn btn-primary">Register/Login</button></a>
            </div>
            <?php } ?>
        </div>
    </div>
     <!-- Nav -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">OpenFarm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- home, marketplace, funding, -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>index.php/home">Home <span class="sr-only">(current)</span></a>
                </li>
                
                 
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/add_opportunity">Add Opportunity</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>index.php/admin/add_tutorial">Upload Tutorials</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search produce" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-srch" type="submit">Search</button>
              </form>
            </div>
          </nav>
   