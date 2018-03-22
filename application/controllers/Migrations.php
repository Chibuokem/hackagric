 <?php
 class Migrations extends CI_Controller{



 			public function index(){

 				$this->load->database();

               $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
                echo 'Migrations completed';

             } 


      }          

   ?>             