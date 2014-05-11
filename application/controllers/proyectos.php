<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_proyectos');
	}

	public function index() {
		if($this->session->userdata('logger') == TRUE){
			$data['organizaciones'] = $this->m_proyectos->obtenerOrganizaciones();
			$this->load->view('proyectos', $data);
		}else{
			redirect(base_url());
		}
	}

	public function selected($rfc) {
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('proyecto_selected');
		}else{
			redirect(base_url());
		}
	}

}