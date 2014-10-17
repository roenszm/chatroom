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
		
		$this->load->helper('cookie');
		
		$this->load->model('message_model','msg');

		$mid = $this->input->post('mid');
		
		
		$message = $this->msg->load($mid);
		
		
		if (count($message) == 0) echo '';
		else echo json_encode($message);
		
	}
	
	
	
	
}
