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
	public function agregarProyecto($rfc){
		if($this->session->userdata('logger') == TRUE){
			$this->form_validation->set_rules('pname', 'Nombre de Proyecto','trim|xss_clean|required');
			$this->form_validation->set_rules('category', 'Categoria', 'trim|xss_clean|required');
			$this->form_validation->set_rules('responsable', 'Responsable', 'trim|xss_clean|required');
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|xss_clean|required');
			$this->form_validation->set_message('required', 'Este campo es requerido');
			$this->form_validation->set_error_delimiters('','');
			if($this->form_validation->run() == FALSE){
				$errors = array(
						array(
							'campo' => 'nombre-cmp',
							'error' => form_error('pname')
							),
						array(
							'campo' => 'category-cmp',
							'error' => form_error('category')
							),
						array(
							'campo' => 'responsable-cmp',
							'error' => form_error('responsable')
							),
						array(
							'campo' => 'descripcion-cmp',
							'error' => form_error('descripcion')
							)					
					);

				$result = json_encode($errors);
				echo $result;
			}else{
				$nombrep 	= $this->input->post('pname');
				$category = $this->input->post('category');
				$respo 		= $this->input->post('responsable');
				$descri 	= $this->input->post('descripcion');
				$email 		= $this->session->userdata('u_email');
				$proyecto = $this->m_proyectos->agregarProyecto($rfc, $nombrep, $descri, $category);
				if($proyecto != 0){
					$asignar = $this->m_proyectos->asignarProyecto($email, $proyecto);
					$errors = array(
					array(
						'campo' => 'group-rfc',
						'error' => ''
						)
					);
					$result = json_encode($errors);
					echo $result;
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