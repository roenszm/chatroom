<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	
	
	public function index()
	{
		$this->load->model('message_model','msg');
		
		$message = $this->msg->load(0);
		$data['mid'] = $message['id'];
		
		$this->load->view('chatroom',$data);
		
	}
	
	public function savemessage()
	{
		
		$this->load->model('message_model','msg');
		
		$this->msg->save();
		
	}
	
	public function load()
	{
		
		$this->load->model('message_model','msg');
		
		$message = $this->msg->load($this->input->post('mid'));
		
		while(count($message)==0){
			usleep(100000);
			$message = $this->msg->load($this->input->post('mid'));
		}
		
		echo json_encode($message);
		
	}
	
	
	
	
}
