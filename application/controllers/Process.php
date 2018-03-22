<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        /**
         * [register_product description]
         * @return [type] [description]
         */
	public function register_product(){
		$user_id = $this->userdata('user_id');

		if($user_id != ""){
			//insert product
			
			$data['user_id'] = $user_id;

			$data['description'] = $this->input->post('description');
			$data['price'] = $this->input->post('price');
			$data['category'] = $this->input->post('category');
			$data['status'] = $this->input->post('status');
			$data['farm_id'] = $this->input->post('farm_id');

			 $image_name = $this->upload_image();

			 if($image_name != false){
			 	$data['image'] = $image_name;
			 }

			 $this->db->insert('product_details' ,$data);
		}
		else{
			echo false;
		}
	}

		/**
		 * function for farm registration
		 * @return [type] [description]
		 */
		//register farm 
	public function register_farm(){
		$data['name'] = $this->input->post('name');
		$data['roi'] = $this->input->post('roi');
		$data['location'] = $this->input->post('location');
		$data['description'] = $this->input->post('description');

		$data['user_id'] = $this->session->userdata('user_id');


		//$data['image_name'] = $this->upload_image();
		$this->db->insert('farms', $data);
		$farm_id = $this->db->insert_id();
		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/farms/' . $farm_id . '.jpg');

		$this->db->where('id', $farm_id);
		$this->db->update('farms', array('image'=>$farm_id . '.jpg'));

		echo true;

		//redirect(base_url().'index.php/register/farmer_register_product','refresh');

	}

	

	//this gets all the products in the database 
	public function product_display(){

		$this->db->get('product_details')->result_array();

	}

	public function load_form_2(){
		$this->load->view('forms/login_continue');
	}

	public function load_form_3(){
		$this->load->view('forms/login_continue2');
	}


	public function register_continue_farmer(){

		$this->load->view('forms/login_continue_farmer');
	}

   //this uploads image
	public function upload_image(){
		$this->load->library('upload');
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        return false;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $image_name = $this->upload->data('file_name');

                        return $image_name;
                }
	}

	public function update_profile(){

	$user_id = $this->session->userdata('user_id');

	  if($user_id != ""){

	   $name = $this->input->post('name');
       $bio = $this->input->post('bio');
       $email = $this->input->post('email');
       $state = $this->input->post('state');
       $gender = $this->input->post('gender');

      

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

       $this->db->where('id', $user_id);

       $this->db->update('users', $data);

       echo true;
	}
	else{
		echo false;
	}	
	   

	}

	//show users profile
	public function show_profile(){
		return $this->crude_model->view_profile();
	}

	//show farm by id
	public function get_farm_by_id($id = ''){
		return $this->crude_model->get_farm_by_id($id);
	}
	

	//get user by id
	public function get_user_by_id($id=''){
		return $this->crude_model->user_by_id($id);
	}
	
	

}	