<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Proyectos extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database('default');
		//$this->load->database('production');
	}

	public function obtenerOrganizaciones(){
		$email = $this->session->userdata('u_email');
		$this->db->where('u_email', $email);
		$query = $this->db->get('CI_COMPANY');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{ 
			return NULL;
		}
	}

	public function loadProyectos($rfc){
		$this->db->where('c_rfc', $rfc);
		$query = $this->db->get('CI_PROYECTOS');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return NULL;
		}
	}

	public function agregarProyecto($rfc, $name, $des, $cat) {
		$data = array(
			'c_proy_name' => $name, 
			'c_proy_descri' => $des, 
			'c_proy_bandera' => 1,
			'c_rfc' => $rfc, 
			'id_category' => $cat
			);
		$this->db->trans_start();
		$this->db->insert('CI_PROYECTOS', $data);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		return $insert_id;
	}

	public function asignarProyecto($email, $id){
		$data = array(
			'c_proy_id' => $id, 
			'u_email' => $email
			);

		return $this->db->insert('CI_DETALLE_PROYASIGN', $data);
	}

	public function obtenerCategorias(){
		$query = $this->db->get('CI_CATEGORIAS');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return NULL;
		}
	}

	public function obtenerResponsableCat($category){
		
		$this->db->select('CI_USUARIOS.u_email AS u_email, CI_USUARIOS.u_nombre AS u_nombre, CI_USUARIOS.u_apep AS u_apep, CI_USUARIOS.u_apem AS u_apem');
		$this->db->from('CI_DETALLE_USUARIO, CI_USUARIOS');
		$this->db->where('CI_DETALLE_USUARIO.id_category', $category);
		$this->db->where('CI_DETALLE_USUARIO.u_email = CI_USUARIOS.u_email');

		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}

}
