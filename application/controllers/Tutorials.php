<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorials extends CI_Controller {

	//academy tutorials 
	   public function index(){
		$this->load->view('homepage/header');
		$this->load->view('homepage/academy');
	}


	public function add_tutorial(){
		$description = $this->input->post('description');
		$course_title = $this->input->post('course_title');
		$video_link = $this->input->post('video_link');
		$image =$this->upload_image();
		if($image !=''){
			$data['image'] = $image;
		}
		$video_link = $this->input->post('video_link');
		if($video_link !=""){
			$data['video_link'] = $video_link;
		}

		$data['date_added']= date("Y-m-d H:i:s");

		$this->db->insert('tutorials', $data);

		echo "<div style='color:green;'>tutorials added sucessfully</div>";

	}

	//get all tutorials
	public function get_tutorials(){
		$tutorials = $this->db->get('tutorials')->result_array();
		$data['tutorials'] = $tutorials ;

		//load view

	}

	public function get_tutorial_by_id($id=''){
		if($id!=""){
			$tutorial = $this->db->get_where('tutorials',array('id'=> $id))->row();
		}
	}

	public function add(){

		$this->load->view('admin/add_tutorials');
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

}

?>