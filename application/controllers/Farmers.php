<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmers extends CI_Controller {

		public function dashboard(){

			$this->load->view('header_logged_in.php');
			//$this->load->view('top_empty.php');
			$data['user_type_link'] = 'farmers';
			$this->load->view('top.php',$data);
			$this->load->view('farmers/dashboard',$data);
			
		}

		public function chat(){
		
			$this->load->view('header_logged_in.php');
			$this->load->view('top_empty.php');
			$this->load->view('farmers/chat');
			
		}

			//farm products
		  public function products(){

		  	$data['user_type_link'] = 'farmers';

			$this->load->view('header_logged_in.php',$data);
			$this->load->view('top_empty.php');
			$user_id = $this->session->userdata('user_type');

			
			$this->load->view('farmers/products',$data);
		}

		//product update view 
		public function upload_products(){
			$data['user_type_link'] = 'farmers';
			$this->load->view('header_logged_in.php',$data);
			$this->load->view('top_empty.php');
			$this->load->view('farmers/product_upload');
		}

		//function to upload product
		public function upload(){

		}	

			//view profile function 	
		  public function view_profile(){
		  	$data['user_type_link'] = 'farmers';
			$profile = $this->crude_model->view_profile();
			$data['profile'] = $profile;

			$this->load->view('header_logged_in.php',$data);
			$this->load->view('top_empty.php');
			$this->load->view('farmers/profile',$data);
			
		}

		public function edit_profile(){
			$profile = $this->crude_model->view_profile();
			$data['profile']= $profile;

			$this->load->view('header_logged_in.php',$profile);
			$this->load->view('farmers/dashboard',$data);
			$this->load->view('farmers/profile_edit',$data);
			
		}

		public function update_profile(){

	   $user_id = $this->user_data('user_id');

	  if($user_id != ""){
	   $email = $this->input->post('email');
	   $name = $this->input->post('name');
       $bio = $this->input->post('bio');
       $email = $this->input->post('email');
       $state = $this->input->post('state');

       if($name !=""){
       	$data['name'] = $name;

       }
       if($bio != ""){
       	$data['bio'] = $bio;
       }

       if($email != ""){
       	$data['email'] = $email;
       }

       if($state != ""){
       	$data['state'] = $state;
       }

       $this->db->where('user_id', $id);

       $this->db->update('users',$data);

       echo true;
	}
	else{
		echo false;
	}	
	   

	}

	//show users profile
	public function show_profile($id =''){

		if($id !=""){
			$profile = $this->db->get_where('users',array('id',$id))->row();
		}

		$this->load->view('farmers_profile',$profile);

		//show profile view after this
	}

/**
   public function search(){
   $match = $this->input->post('match');
   $this->db->like('name',$match);
   $this->db->or_like
   **/


  

   }
?>	