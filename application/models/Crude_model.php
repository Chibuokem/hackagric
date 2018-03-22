<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crude_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //model to grab every farmers details
    public function get_all_farmers(){

    	$this->db->get_where('users', array('type'=>'farmers'))->row_array();
    }

    //get user by id
    public function user_by_id($id = ''){

    	$user = $this->db->get_where('user',array('id' =>$id))->row();
    	return $user;
    }

    //view profile 
    public function view_profile(){
    	$user_id = $this->session->userdata('user_id');

    	$user = $this->db->get_where('users',array('id' =>$user_id))->row();

    	return $user;
    }

    //get all farms 
    public function get_all_farms(){
    	$farms = $this->db->get('farms')->result_array();
    	return $farms;

    }

    public function get_farm_by_id($id = ''){
    	if($id != ""){
    		$farm_detail = $this->db->get_where('farms',array('id'=>$id))->row();

    		return $farmers_detail;
    	}
    	
    }

    public function get_tutorial_by_id($id=''){
		if($id!=""){
			$tutorial = $this->db->get_where('tutorials',array('id'=> $id))->row();
		}

		return $tutorial ;
	}

	 public function get_tutorials(){
		
			$tutorials = $this->db->get('tutorials')->row_array();
		

		return $tutorials ;
	}
   
   public function get_products(){

   	$products = $this->db->get('product_details')->row_array();
   	return $products;
   }
  }  