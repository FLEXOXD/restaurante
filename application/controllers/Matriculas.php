<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("estudiante");
    $this->load->model("asignatura");
	}
  public function index(){
    $this->load->view("header");
    $this->load->view("matriculas/index");
    $this->load->view("footer");
  }
  public function nuevo(){
		$data["listadoEstudiantes"]=$this->estudiante->obtenerTodos();
		$data["listadoAsignaturas"]=$this->asignatura->obtenerTodos();
    $this->load->view("header");
    $this->load->view("matriculas/nuevo",$data);
    $this->load->view("footer");
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarMatricula(){
		$datosNuevaMatricula=array(
			"fk_id_est"=>$this->input->post('fk_id_est'),
			"fk_id_asig"=>$this->input->post('fk_id_asig'),
			"fecha_mat"=>$this->input->post('fecha_mat')
			);
		print_r($datosNuevaMatricula);
		if ($this->matricula->insertar($datosNuevaMatricula)) {
			redirect('matriculas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	 	}
}
//cierre de la clase NO BORRAR
