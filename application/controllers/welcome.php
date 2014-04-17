<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_welcome');
	}

	public function index()
	{
		$this->load->view('welcome');
	}

	public function registrarUsuario() {
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'Nombre de Usuario', 'trim|required|is_unique[CI_USUARIOS.u_username]|xss_clean|min_length[8]|max_length[10]');
		$this->form_validation->set_rules('email', 'Correo Electrónico', 'trim|required|is_unique[CI_USUARIOS.u_email]|xss_clean|valid_email');
		$this->form_validation->set_rules('passwr', 'Contraseña', 'trim|required|xss_clean');

		$this->form_validation->set_message('required', '%s requerido.');
		$this->form_validation->set_message('is_unique', 'Este %s ya existe.');
		$this->form_validation->set_message('valid_email', 'Introduce un Correo Electrónico válido.');
		$this->form_validation->set_message('min_length', 'El %s debe contener mínimo 8 Caracteres');
		$this->form_validation->set_message('max_length', 'El %s debe contener máximo 10 Caracteres');

		$this->form_validation->set_error_delimiters('<p><i class="fi-x-circle icon-error"></i>', '</p>');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{
			$nom = $this->input->post('nombre');
			$use = $this->input->post('username');
			$ema = $this->input->post('email');
			$pas = sha1($this->input->post('passwr'));

			$addus = $this->m_welcome->addUsuario($nom, $use, $ema, $pas);
			if($addus) {
				echo 1;
			}else{
				echo 0;
			}
		}

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */