<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()

	{
		
		//$data['products'] = $this->crude_model->get_products();

		$this->load->view('homepage/header.php');

		$this->load->view('homepage/index');
	}
}
