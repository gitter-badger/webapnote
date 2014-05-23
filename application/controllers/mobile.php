<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mobile');
	}

	public function login() {
		$user = $this->input->get('usuario');
		$pass = sha1($this->input->get('password'));

		$datos = $this->m_mobile->getUsuario($user);
		$request = array(
			'validacion' => $this->m_mobile->autenticacion($user, $pass), 
			'email' => $user, 
			'username' => $datos->u_username, 
			'nombre' => $datos->u_nombre,
			'apep' => $datos->u_apep, 
			'apem' => $datos->u_apem,
			'org' => $datos->c_rfc
		);

		//if()
		$resultados = json_encode($request);
		echo $_GET['jsoncallback'] . '(' . $resultados . ');';
	}

	public function obtenerProyectos($org){
		$request = array();
		$request = $this->m_mobile->getProyectos($org);

		$resultados = json_encode($request);
		echo $resultados;
	}

	public function seleccionar($id){
		$data['datas'] = $id;
		$resultado = json_encode($data);
		echo $resultado;
	}
	
}