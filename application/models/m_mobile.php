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
		$query = $this->db->get('CI_USUARIOS');
		if($query->num_rows() == 1){
			return $query->row();
		}else{
			return NULL;
		}
	}

	public function proyectosCursos($email){
		$this->db->select('CI_PROYECTOS.c_proy_name AS p_nombre, CI_PROYECTOS.c_proy_descri AS p_descri, CI_PROYECTOS.c_fecha_creado AS p_fecha, CI_CATEGORIAS.cat_name AS p_cat, CI_PROYECTOS.c_proy_id AS id_proyecto');
		$this->db->from('CI_DETALLE_PROYASIGN, CI_PROYECTOS, CI_CATEGORIAS');		
		$this->db->where('CI_DETALLE_PROYASIGN.u_email', $email);
		$this->db->where('CI_CATEGORIAS.id_category = CI_PROYECTOS.id_category');
		$this->db->where('CI_DETALLE_PROYASIGN.c_proy_id = CI_PROYECTOS.c_proy_id');
		$this->db->where('CI_PROYECTOS.c_fecha_ini =  "0000-00-00 00:00:00"');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return NULL;
		}
	}

	public function proyectosIniciados($email){
		$this->db->select('CI_PROYECTOS.c_proy_name AS p_nombre, CI_PROYECTOS.c_proy_descri AS p_descri, CI_PROYECTOS.c_fecha_creado AS p_fecha, CI_CATEGORIAS.cat_name AS p_cat, CI_PROYECTOS.c_proy_id AS id_proyectos');
		$this->db->from('CI_DETALLE_PROYASIGN, CI_PROYECTOS, CI_CATEGORIAS');		
		$this->db->where('CI_DETALLE_PROYASIGN.u_email', $email);
		$this->db->where('CI_CATEGORIAS.id_category = CI_PROYECTOS.id_category');
		$this->db->where('CI_DETALLE_PROYASIGN.c_proy_id = CI_PROYECTOS.c_proy_id');
		$this->db->where('CI_PROYECTOS.c_fecha_ini <>  "0000-00-00 00:00:00"');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return NULL;
		}
	}

}