<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function login(){

			$email = $this->input->post('email');

			$password = $this->input->post('password');

			if($email !="" && $password !=""){
         $check = $this->db->get_where('admin',array('email'=>$email ,'password'=>sha1($password)))->num_rows();	

         	if($check > 0){
         		$user_details = $this->db->get_where('admin', array('email'=>$email ,'password'=>sha1($password)))->row();
         		$user_id = $user_details->id;

         		$this->session->set_userdata('user_id', $user_id);
         		$this->session->set_userdata('user_type','admin');
         	}


			}
			else{
				echo "Incomplete fields ";
			}
			
		}

		//admin login page view 
		public function index(){
			//load login page
			
		$this->load->view('admin/login');
			
		}
			//add admin
		public function create_admin(){

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			if($email !="" && $password !=""){
				$data['email'] = $email;
				$data['password'] = sha1($password);

				$this->db->insert('admin',$data);

				echo true;

			}
			else{
				echo "Incomplete fields";
			}

		}

		//add funding opporunities 
		public function add_funding(){

			$this->load->view('admin/header');
			$this->load->view('admin/add_funding');

		}

		public function add_opportunity(){

			$this->load->view('admin/header');
			$this->load->view('admin/add_opportunity');
			
		}

		public function add_tutorial(){

			$this->load->view('admin/header');
			$this->load->view('admin/add_tutorials');
			
		}


}