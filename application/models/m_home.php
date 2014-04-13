<?php

class m_home extends CI_Model{

	function get_all_students(){
		$this->db->select("no_de_control");
		$this->db->select("nip");
		$this->db->select("carrera");
		$this->db->from('alumnos');
		
		$result = $this->db->get();
		
		return $result->result();
	}
	
		
}

	 
