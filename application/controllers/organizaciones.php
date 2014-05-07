<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizaciones extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_organizaciones');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['datos'] = $this->m_organizaciones->addOrg();
		if($this->session->userdata('logger') == TRUE){
			$this->load->view('organizaciones', $data);
		}else {
			redirect(base_url());
		}
	}

	public function addO(){
		$this->form_validation->set_rules('rfc', 'RFC de Compañía', 'trim|required|xss_clean|min_length[5]|max_length[6]|is_unique[CI_COMPANY.c_rfc]');
		$this->form_validation->set_rules('name', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Telefono', 'trim|required|numeric|max_length[7]|xss_clean');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|xss_clean');

		$this->form_validation->set_error_delimiters('<p><i class="fi-x-circle icon-error"></i>', '</p>');
		if($this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else {
			$rfc = $this->input->post('rfc');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$des = $this->input->post('descripcion');

			$query = $this->m_organizaciones->insertOrg($rfc, $name, $phone, $des);
			if($query){
				echo 1;
			}else{
				echo 0;
			}
		}
	}

	public function delete($rfc) {
		$query = $this->m_organizaciones->deleteOrg($rfc);
		if($query){
			redirect(base_url('organizaciones'));
		}
	}

	public function edit($rfc) {
		if($this->session->userdata('logger') == TRUE){
			$data['datos'] = $this->m_organizaciones->addOrg();
			$data['porg'] = $this->m_organizaciones->getOrg($rfc);
			$this->load->view('organizacion_edit', $data);
		}else{
			redirect(base_url());
		}	
	}

	public function update($rfc){
		if($this->session->userdata('logger') == TRUE){
			$this->form_validation->set_rules('ephone','Telefono', 'trim|xss_clean|numeric|max_length[7]');
			$this->form_validation->set_message('numeric', 'El Campo %s solo puede contener datos numericos.');
			$this->form_validation->set_message('max_length','El Campo %s debe contener máximo %d caracteres.');
			$this->form_validation->set_error_delimiters('','');
			if($this->form_validation->run() == 	FALSE){
				$data['datos'] = $this->m_organizaciones->addOrg();
				$data['porg'] = $this->m_organizaciones->getOrg($rfc);
				$data['validation'] = array( 'validacion' => validation_errors());
				$this->load->view('organizacion_edit', $data);
			}else{
				$name = $this->input->post('ename');
				$phone = $this->input->post('ephone');
				$des = $this->input->post('edes');
				$query = $this->m_organizaciones->updateInfo($rfc, $name, $phone, $des);
				if($query){
					$data['datos'] = $this->m_organizaciones->addOrg();
					$data['porg'] = $this->m_organizaciones->getOrg($rfc);
					$data['query'] = array( 'result' => 1);
					$this->load->view('organizacion_edit', $data);
				}
			}
		}else{
			redirect(base_url());
		}
	}

	public function team($rfc) {
		if($this->session->userdata('logger') == TRUE){
			$data['datos'] = $this->m_organizaciones->addOrg();
			$data['porg'] = $this->m_organizaciones->getOrg($rfc);
			$this->load->view('organizacion_team', $data);
		}else{
			redirect(base_url());
		}
	}
	
}