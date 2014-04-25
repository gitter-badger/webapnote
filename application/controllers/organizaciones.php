<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizaciones extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model()
	}

	public function index() {
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('organizaciones');
		}else {
			redirect(base_url());
		}
	}

}