<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_profile');
	}

	public function index() {
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('profile');
		}else{
			redirect(base_url());
		}
	}

}