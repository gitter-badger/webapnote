<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mobile');
	}

	public function index(){
		$this->load->view('v_mobile');
	}

	public function APILogin(){
		$user = $this->input->get('email');
		$password = sha1($this->input->get('passwd'));
		$result = $this->m_mobile->autenticacion($user, $password);
		if($result){
			$data = array(
				'success' => 1, 
				'message' => "Inicio de Sesión Correcto"
				);

			$result = json_encode($data);
			echo $_GET['jsoncallback'] .'('.$result.')';
		}else{
			$data = array(
				'success' => 0,
				'message' => "El Correo Electrónico o Contraseña están incorrectos."
				);

			$result = json_encode($data);
			echo $_GET['jsoncallback'] .'('.$result.')';
		}
	}


}