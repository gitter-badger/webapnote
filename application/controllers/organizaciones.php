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
		$this->form_validation->set_rules('rfc', 'RFC de Compañía', 'trim|required|xss_clean|min_length[12]|max_length[13]|is_unique[CI_COMPANY.c_rfc]');
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
			$data['team'] = $this->m_organizaciones->addTeam($rfc);
			$data['porg'] = $this->m_organizaciones->getOrg($rfc);
			$this->load->view('organizacion_team', $data);
		}else{
			redirect(base_url());
		}
	}

	public function updateUsers($rfc){
		if($this->session->userdata('logger') == TRUE){
			$this->form_validation->set_rules('t_email', 'Email', 'trim|required|valid_email|xss_clean|is_unique[CI_USUARIOS.u_email]');
			$this->form_validation->set_rules('t_username', 'Nombre de Usuario', 'trim|required|xss_clean|is_unique[CI_USUARIOS.u_username]');
			$this->form_validation->set_rules('t_name', 'Nombre', 'trim|required|xss_clean');
			$this->form_validation->set_rules('t_apep', 'Apellido Paterno', 'trim|required|xss_clean');
			$this->form_validation->set_rules('t_apem', 'Apellido Materno', 'trim|xss_clean');
			$this->form_validation->set_rules('t_pass', 'Contraseña', 'trim|xss_clean|required|matches[t_passmatch]');

			$this->form_validation->set_error_delimiters('<div class="alert-box warning radius" data-alert>', '<a href="" class="close">&times;</a></div>');
			if($this->form_validation->run() == FALSE){
				$data['datos'] = $this->m_organizaciones->addOrg();
				$data['team'] = $this->m_organizaciones->addTeam($rfc);
				$data['porg'] = $this->m_organizaciones->getOrg($rfc);
				$data['validation'] = array( 'validacion' => validation_errors());
				$this->load->view('organizacion_team', $data);
			}else{
				$email = $this->input->post('t_email');
				$username = $this->input->post('t_username');
				$nombre = $this->input->post('t_name');
				$apep = $this->input->post('t_apep');
				$apem = $this->input->post('t_apem');
				$pass = sha1($this->input->post('t_pass'));
				$rol = 2;

				$query = $this->m_organizaciones->iAddTeam($email, $username, $nombre, $apep, $apem, $pass, $rol, $rfc);
				if($query){
					$data['datos'] = $this->m_organizaciones->addOrg();
					$data['team'] = $this->m_organizaciones->addTeam($rfc);
					$data['porg'] = $this->m_organizaciones->getOrg($rfc);
					$data['query'] = array( 'result' => 1 );
					$this->load->view('organizacion_team', $data);
				}else {
					echo 0;
				}
			}
		}else{
			redirect(base_url());
		}
	}
	
}