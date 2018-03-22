<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){

		parent::__construct();

		$this->load->database();
	}
	
	public function index()
	{
		$this->load->view('register');
	}

 

 /**
  * [inital_registration description]
  * @param  string $email            [description]
  * @param  string $password         [description]
  * @param  string $confirm_password [description]
  * @return [type]                   [description]
  */
 	public function inital_registration(){

 			$email = $this->input->post('email');
 			$state = $this->input->post('state');
 			$password = $this->input->post('password');
 			$confirm_password = $this->input->post('confirm_password');			
		if($password != $confirm_password){
			echo "Passwords do not match";
		}
		else{
			$this->db->insert('users', array('email'=>$email, 'password'=>sha1($password), 'state'=>$state, 'date_added'=>date("Y-m-d H:i:s")));
			$user_id = $this->db->insert_id();

			$this->session->set_userdata('user_id', $user_id);


			echo true;
		}
	}

	/**
	 * set user type after login 
	 * @param [type] $type [description]
	 */
	public function set_user_type($type){

		$user_id = $this->session->userdata('user_id');

		if($user_id != ""){
			echo false;
		}
		else{
			$this->db->where('id',$user_id);
			$this->db->update('users',array('type'=>$type));
			echo true;
		}
	}

	public function register_continue(){
		$user_id = $this->session->userdata('user_id');

		$data['name'] = $this->input->post('name');
		$data['type'] = $this->input->post('type');

		$this->db->where('id',$user_id);
		$this->db->update('users', $data);
	}
//
public function register_continue2(){
		$user_id = $this->session->userdata('user_id');

		$data['gender'] = $this->input->post('gender');
		$data['bio'] = $this->input->post('bio');
		$data['phone'] = $this->input->post('phone');


		$this->db->where('id',$user_id);
		$this->db->update('users', $data);

		$user_type = $this->db->get_where('users',array('id'=>$user_id))->row()->type;

		if($user_type ='farmer'){
			//direct to farmer 
			redirect(base_url().'index.php/process/register_continue_farmer','refresh');
		}
		else{

		}
	}
/**
 * [add_farmers_personal_details description]
 * @param string $name          [farmers name]
 * @param string $phone         [farmers phone number]
 * @param string $date_of_birth [farmers date of birth]
 * @param string $bio           [farmers bio]
 */
	public function add_farmers_personal_details($name ='', $phone ='', $date_of_birth='',$bio = ''){

		$data['name'] = $name;
		$data['phone']= $phone;
		$data['date_of_birth'] = $date_of_birth;
		$data['bio'] = $bio;

		$user_id = $this->session->userdata('user_id');
		if($user_id != ""){
			die(false);
		}
		$data['user_id'] = $user_id;

		$this->db->insert('farmers_detail', $data);

		die(true);
	}



	public function generate_id(){
		//generating random registration number 
			//$code_feed = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyv0123456789";
			$code_feed = "01234567892178923";
			$code_length = 5;  // Set this to be your desired code length
			$final_code = "";
			$feed_length = strlen($code_feed);
			
			for($i = 0; $i < $code_length; $i ++) {
				$feed_selector = rand(0,$feed_length-1);
				$final_code .= substr($code_feed,$feed_selector,1);
			}
			$id_number="farm/20".date('y')."/".$final_code;

			return $id_number;

	}

	

	public function generate_code($code_length = ''){

		$code_feed = "01234567892178923";
			  // Set this to be your desired code length
			$final_code = "";
			$feed_length = strlen($code_feed);
			
			for($i = 0; $i < $code_length; $i ++) {
				$feed_selector = rand(0,$feed_length-1);
				$final_code .= substr($code_feed,$feed_selector,1);
			}
			return $final_code;
	}

	public function register_product(){

		$farm_id = $this->input->post('farm_id');
		$category = $this->input->post('category');
		$product_name = $this->input->post('product_name');
		$description = $this->input->post('descriptione');
		$user_id = $this->session->userdata('user_id');
		$price = $this->input->post('price');

		//insert into database
		
		$this->db->insert('product_details',array('description'=>$description, 'user_id'=>$user_id, 'category'=>$category, 'name'=>$product_name, 'farm_id'=>$farm_id, 'price'=>$price ));

		  $product_id = $this->db->insert_id();

		  move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/products/' . $product_id . '.jpg');
		  $this->db->where('id',$product_id);
		  $this->db->update('product_details',array('image'=>$product_id . '.jpg'));

		  echo true;
		  //go to dashboard after this
		  
	}

	//farmer registering product after registration;
	public function farmer_register_product(){

			
	  $this->load->view('forms/register_product');
	}


}
