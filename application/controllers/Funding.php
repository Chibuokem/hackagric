<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funding extends CI_Controller {

	//funding view pages 
	public function index(){
		//load pagination libraRY
		$this->load->view('homepage/header');
		$this->load->view('funding/funding');

	}

	//upload funding opportunity
	public function upload_funding(){
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$state = $this->input->post('state');
		$description = $this->input->post('description');

		//if($title !="" && $date!="" && $state !="" && $description !=""){

				$data['title'] = $title;
				$data['date_added'] = date("Y-m-d H:i:s");;
				//$data['state'] = $this->input->post('state');
				$data['description'] = $this->input->post('description');

				//upload image
				
				$this->db->insert('funding',$data);
				$image_id = $this->db->insert_id();
				move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/funding/' . $image_id . '.jpg');
				$this->db->where('id', $image_id);
				$this->db->update('funding',array('image'=> $image_id . '.jpg'));
				echo "Tutorial added sucessfully";
				//uploading complete

		//}
		//else{
		//	die("Incomplete fields");
		//}
	
	}

	public function edit_funding($id=""){
		if($id !=""){

	$description = $this->input->post('description');
	$title = $this->input->post('title');
	$state = $this->input->post('state');

	if($description !=""){
		$data['description'] = $description;

	}
	if($title !=""){
		$data['title'] = $title;
	}

	if($state !=""){
		$data['state'] = $state;
	}
		//
	$this->db->where('id', $id);
	$this->db->update('funding', $data);
	echo true;

		}
		
	}

	//delete funding function
	public function delete_funding($id =''){
		if($id !=""){
			$this->db->where('id',$id);
			$this->db->delete('funding');
			echo true;
		}

	}


	//apply for funding
	public function apply_funding($id = ""){
		$user_id = $this->session->userdata('user_id');
		//apply
		$data['user_id'] = $user_id;
		$data['application_id'] = $id;
		$data['date_added'] = date("Y-m-d H:i:s");


		$this->db->insert('applications', $data);
		echo "Application recieved";
	}

	//view funding details and apply
	public function view_funding($id =''){
		
		$data['funding_id'] = $id;

		$this->load->view('funding_application',$data); 
	}

	//view funding applications by farmer
	public function view_application(){
		$user_id = $this->session->userdata('user_id');
       $applications = $this->db->get_where('apply',array('user_id'=>$user_id))->row_array();

       $data['applications'] = $applications;
       $this->load->view('applications',$data);

	}

	//adding of funding by admin
	public function add(){
		$this->load->view('admin/add_funding');
	}


}	