<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dashboard extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->database('default');
		//$this->load->database('production');
	}

}