<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mobile');
	}

	public function login() {
		$user = $this->input->get('usuario');
		$pass = sha1($this->input->get('password'));

		$request = array();

		$request['validacion'] = $this->m_mobile->autenticacion($user, $pass);
		//if()
		$resultados = json_encode($request);
		echo $_GET['jsoncallback'] . '(' . $resultados . ');';
	}

}