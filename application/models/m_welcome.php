<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Welcome extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database('default');
	}

	public function addUsuario($nombre, $username, $email, $passw){
		$data = array (
			'u_email' => $email,
			'u_username' => $username, 
			'u_nombre' => $nombre, 
			'u_password' => $passw,
			'r_id' => 1
		);

		return $this->db->insert('CI_USUARIOS', $data);
	}

}