<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_proyectos');
		$this->load->library('form_validation');
	}

	public function index() {
		if($this->session->userdata('logger') == TRUE){
			$data['organizaciones'] = $this->m_proyectos->obtenerOrganizaciones();
			$this->load->view('proyectos', $data);
		}else{
			redirect(base_url());
		}
	}

	public function selected($rfc) {
		if($this->session->userdata('logger') == TRUE){
			$datos['proyectos'] = $this->m_proyectos->loadProyectos($rfc);
			$datos['categorias'] = $this->m_proyectos->obtenerCategorias();
			$datos['orgpro'] = $rfc;
			$this->load->view('proyecto_selected', $datos);
		}else{
			redirect(base_url());
		}
	}
	
	// No disponible por el momento ;
	public function add($rfc){
		if($this->session->userdata('logger') == TRUE){
			$this->form_validation->set_rules('p_name', 'Nombre', 'trim|required|xss_clean|alpha');
			$this->form_validation->set_rules('p_des', 'Descripción', 'trim|required|xss_clean');
			$this->form_validation->set_error_delimiters('<div class="alert-box warning radius" data-alert>','<a href="#" class="close">&times;</a></div>');
			if($this->form_validation->run() == FALSE) {
				$datos['proyectos'] = $this->m_proyectos->loadProyectos($rfc);
				$datos['orgpro'] = $rfc;
				$datos['validation'] = array( 'validacion' => validation_errors());
				$this->load->view('proyecto_selected', $datos);
			}else {
				$nombre = $this->input->post('p_name');
				$des = $this->input->post('p_des');
				$query = $this->m_proyectos->agregarProyecto($rfc, $nombre, $des);
				if($query) {
					$datos['proyectos'] = $this->m_proyectos->loadProyectos($rfc);
					$datos['orgpro'] = $rfc;
					$datos['query'] = array( 'result' => 1);
					$this->load->view('proyecto_selected', $datos);
				}
			}
		}else{
			redirect(base_url());
		}
	}

	// Obtener responsables para seleccionar ;
	public function obtenerResponsables($category){
		if($this->session->userdata('logger') == TRUE){
			$datos = $this->m_proyectos->obtenerResponsableCat($category);
			if($datos){
				$result = json_encode($datos);
				echo $result;
			}			
		}else{
			redirect(base_url());
		}
	}
}