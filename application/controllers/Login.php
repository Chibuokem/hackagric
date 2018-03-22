<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		//check user 
		public function check_user(){

			$email = $this->input->post('email');

			$password = $this->input->post('password');

			if($email !="" && $password !=""){
         $check = $this->db->get_where('users',array('email'=>$email ,'password'=>sha1($password)))->num_rows();	

         	if($check > 0){
         		$user_details = $this->db->get_where('users', array('email'=>$email ,'password'=>sha1($password)))->row();
         		$user_id = $user_details->id;

         		$this->session->set_userdata('user_id', $user_id);

         		$this->session->set_userdata('user_type',$user_details->type);

         		if($type='farmer'){
         			$url = base_url().'index.php/farmers/dashboard';
         		}

         		echo true;
         	}


			}
			
		}

		//direct logged in user
		public function direct_user(){
			$type = $this->session->userdata('user_type');
			if($type='farmer'){
         			$url = base_url().'index.php/farmers/dashboard';
         			redirect($url,'refresh');
         	}
         	elseif($type = 'investor'){
         		$url = base_url().'index.php/investor/dashboard';
         			redirect($url,'refresh');
         	}
         	elseif($type='mentor'){
         		$url = base_url().'index.php/mentor/dashboard';
         			redirect($url,'refresh');
         	}
         	elseif($type='organization'){
         		$url = base_url().'index.php/organization/dashboard';
         			redirect($url,'refresh');
         	}

		}

		//admin lodin page view 
		public function index(){
			//load login page
			
			$this->load->view('login');
		}

		public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php/login', 'refresh');
    }

    //check user 
		public function check_admin(){

			$email = $this->input->post('email');

			$password = $this->input->post('password');

			if($email !="" && $password !=""){
         $check = $this->db->get_where('admin',array('email'=>$email ,'password'=>sha1($password)))->num_rows();	

         	if($check > 0){
         		$user_details = $this->db->get_where('admin', array('email'=>$email ,'password'=>sha1($password)))->row();
         		$user_id = $user_details->id;

         		$this->session->set_userdata('user_id', $user_id);
         		$this->session->set_userdata('user_type','admin');
         		echo true;
         	}


			}
			
		}

}