<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	
	public function index(){
		
		$this->load->model('m_home');
		
		$data['alumnos'] = $this->m_home->get_all_students();
		
		$this->load->view('home',$data);
		
		
		
		
		
		
	}
}
