<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_dashboard');
	}

	public function index() {
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('dashboard');
		}else{
			redirect(base_url());
		}
	}

}