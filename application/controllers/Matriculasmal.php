<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("matricula");
	}
	// renderiza la vista index de matriculas
	public function index()
	{
		$data["listadoMatriculas"]=$this->matricula->obtenerTodos();
		$this->load->view('header');
		$this->load->view('matriculas/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de matriculas
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('matriculas/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarMatricula(){
		$datosNuevaMatricula=array(
			"tipo_mat"=>$this->input->post('tipo_mat'),
			"nombre_mat"=>$this->input->post('nombre_mat'),
			"observaciones_mat"=>$this->input->post('observaciones_mat'),
			"estado_mat"=>$this->input->post('estado_mat'),
		);
		print_r($datosNuevaMatricula);
		if ($this->matricula->insertar($datosNuevaMatricula)) {
			redirect('matriculas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Funcion para eliminar matricula
	public function borrar($id_mat){
		if ($this->matricula->eliminarPorId($id_mat)){
			redirect('matriculas/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["matriculaEditar"]=$this->matricula->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("matriculas/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosMatriculaEditada=array(
			"tipo_mat"=>$this->input->post('tipo_mat'),
			"nombre_mat"=>$this->input->post('nombre_mat'),
			"observaciones_mat"=>$this->input->post('observaciones_mat'),
			"estado_mat"=>$this->input->post('estado_mat')
		);
		$id=$this->input->post("id_mat");
		if ($this->matricula->actualizar($id,$datosMatriculaEditada)) {
			redirect('matriculas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
