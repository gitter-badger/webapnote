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

}