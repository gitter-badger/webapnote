<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mobile');
	}

	public function APILogin(){
		$user = $this->input->post('email');
		$password = $this->input->post('passwd');

	}

}