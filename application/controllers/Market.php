<?php
class Market extends CI_Controller{


	public function index(){

		$this->load->view('homepage/header.php');
		$this->load->view('homepage/marketplace');
	}
}

?>