<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Profile extends CI_Model {

	public function __construct(){ 
		parent::__construct();
		$this->load->database('default');
	}

	public function update($email, $nombre, $apep, $apem){
		$data = array(
			'u_nombre' => $nombre, 
			'u_apep' => $apep,
			'u_apem' => $apem
			);
		$this->db->where('u_email', $email);
		return $this->db->update('CI_USUARIOS', $data);
	}

}