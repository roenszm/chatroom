<?php
class Message_model extends CI_Model{
	
	var $name;
	var $content;
	var $time;
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	function save()
	{
		$message = htmlspecialchars($this->input->post('message'));
		$name = htmlspecialchars($this->input->post('name'));
		
		$this->db->set('name', $name);
		$this->db->set('content', $message);

		$datetime = date('Y-m-d H:i:s');
		
		$this->db->set('time', $datetime);
		
		$this->db->insert('message');
		
	}
	
	function load($mid = 0)
	{
		
		if ($mid > 0) {
			$this->db->where('id >', $mid);
			$this->db->order_by('id','asc');
				
			$query = $this->db->get('message');
				
			return $query->row_array();
		} else {
			$this->db->order_by('id','desc');
			$query = $this->db->get('message');
			return $query->row_array();
		}
		

		
	}
	
	
	
}

