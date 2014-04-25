<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizaciones extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_organizaciones');
	}

	public function index() {
		$data['datos'] = $this->m_organizaciones->addOrg();
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('organizaciones', $data);
		}else {
			redirect(base_url());
		}
	}

}