<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class M_Organizaciones extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database('default');
	}

	public function addOrg(){
		$email = $this->session->userdata('u_email');
		$this->db->where('u_email', $email);
		$query = $this->db->get('CI_COMPANY');
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{ 
			return NULL;
		}
	}

	public function getOrg($rfc) {
		$this->db->where('c_rfc', $rfc);
		$query = $this->db->get('CI_COMPANY');
		if($query->num_rows() > 0){
			return $query->first_row('array');
		}else{
			return NULL;
		}
	}

	public function insertOrg($rfc, $name, $phone, $des){
		$email = $this->session->userdata('u_email');
		$data = array(
			'c_rfc' => $rfc,
			'c_name' => $name, 
			'c_descri' => $des, 
			'c_phone' => $phone, 
			'u_email' => $email
		);

		return $this->db->insert('CI_COMPANY', $data);
	}

	public function deleteOrg($rfc){
		$this->db->where('c_rfc', $rfc);
		return $this->db->delete('CI_COMPANY');
	}

	public function updateInfo($rfc, $name, $phone, $des){
		$data = array(
			'c_name' => $name, 
			'c_phone' => $phone, 
			'c_descri' => $des
		);
		$this->db->where('c_rfc', $rfc);	
		if($this->db->update('CI_COMPANY', $data)){
			return true;
		}else{
			return false;
		}
	}

}