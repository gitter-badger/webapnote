<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Mobile extends CI_Model {

	public function __construct(){ 
		parent::__construct();
		$this->load->database('default');
		//$this->load->database('production');
	}

	public function autenticacion($user, $pass) {
		$this->db->where('u_email', $user);
		$this->db->where('u_password', $pass);
		$this->db->where('r_id', 2);
		$query = $this->db->get('CI_USUARIOS');
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function getUsuario($email){
		$this->db->where('u_email', $email);
		$query = $this->db->get('CI_USERS');
		if($query->num_rows() == 1){
			return $query->row();
		}else{
			return NULL;
		}
	}

	public function getProyectos($rfc){
		$this->db->where('c_rfc', $rfc);
		$query = $this->db->get('CI_PROYECTOS');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return NULL;
		}
	}

}