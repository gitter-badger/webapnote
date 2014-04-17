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
		$this->form_validation->set_rules('email', 'Correo Electrónico', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('passwr', 'Contraseña', 'trim|required|xss_clean');

		$this->form_validation->set_message('required', 'El %s es requerido.');
		$this->form_validation->set_message('is_unique', 'Este $s ya existe.');
		$this->form_validation->set_message('valid_email', 'Introduce un Correo Electrónico válido.');
		$this->form_validation->set_message('min_length', 'El %s debe contener mínimo 8 Caracteres');
		$this->form_validation->set_message('max_length', 'El %s debe contener máximo 10 Caracteres');

		$this->form_validation->set_error_delimiters('', '');
		if($this->form_validation->run() == FALSE){
			echo validation_errors();
		}else{
			$nombre = $this->input->post('nombre');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$passw = sha1($this->input->post('passwr'));

			$addus = $this->m_welcome->addUsuario($nombre, $username, $email, $passw);
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