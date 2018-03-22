<?php
class Chat extends CI_Controller {


	public function retrieve_user_chats(){
		$user_id = $this->session->userdata('user_id');

		$chats = $this->db->get_where('chats',array('reciever_id'=>$user_id))->result_array();
		$response ="";

		foreach ($chats as $chat){
			$sender_name = $this->db->get_where('users',array('id'=>$chat['sender_id']))->row()->name;
			$reciever_name = $this->db->get_where('users',array('id'=>$chat['reciever_id']))->row()->name;
			if($chat['status']==1){
				$status ='read';
			}
			else{
				$status ='unread';
			}

			$chat_array = array('sender_name'=>$sender_name, 'reciever_name'=>$reciever_name, 'status'=>$status, 'message'=>$chat['message'],'message_time'=>$chat['message_time'], 'recieved_time'=>$chat['recieved_time']);

			   array_push($response , $chat_array);

		}
		 echo json_encode($response,JSON_FORCE_OBJECT);


	}

	public function get_unread_chats(){
		$user_id = $this->session->userdata('user_id');
		$chats = $this->db->get_where('chats',array('reciever_id'=>$user_id))->result_array();
		foreach ($chats as $chat){
			$sender_name = $this->db->get_where('users',array('id'=>$chat['sender_id']))->row()->name;
			$reciever_name = $this->db->get_where('users',array('id'=>$chat['reciever_id']))->row()->name;
			if($chat['status']==1){
				$status ='read';
			}
			else{
				$status ='unread';
			}

			$chat_array = array('sender_name'=>$sender_name, 'reciever_name'=>$reciever_name, 'status'=>$status, 'message'=>$chat['message'],'message_time'=>$chat['message_time'], 'recieved_time'=>$chat['recieved_time']);

			   array_push($response , $chat_array);

		}
		 echo json_encode($response,JSON_FORCE_OBJECT);
	}

	public function send_chat(){
		$message = $this->input->post('message');
		$date = date("Y-m-d H:i:s");
		$sender = $this->session->userdata('user_id');
		$reciever = $this->input->post('reciever');

		$this->db->insert('chats', $data);
	}

	public function check_new_chat(){

	}

	public function index(){
		$this->load->view('chat/index');
	}

}

?>