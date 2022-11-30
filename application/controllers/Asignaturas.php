<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaturas extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("asignatura");
	}
	// renderiza la vista index de asignaturas
	public function index()
	{
		$data["listadoAsignaturas"]=$this->asignatura->obtenerTodos();
		$this->load->view('header');
		$this->load->view('asignaturas/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de asignaturas
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('asignaturas/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarAsignatura(){
		$datosNuevaAsignatura=array(
			"nombre_asig"=>$this->input->post('nombre_asig'),
			"creditos_asig"=>$this->input->post('creditos_asig')
		);
		print_r($datosNuevaAsignatura);
		if ($this->asignatura->insertar($datosNuevaAsignatura)) {
			redirect('asignaturas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Funcion para eliminar asignaturas
	public function borrar($id_asig){
		if ($this->asignatura->eliminarPorId($id_asig)){
			redirect('asignaturas/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["asignaturaEditar"]=$this->asignatura->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("asignaturas/actualizar",$data);
		$this->load->view("footer");
	}
	//
	public function procesarActualizacion(){
		$datosAsignaturaEditada=array(
			"nombre_asig"=>$this->input->post('nombre_asig'),
			"creditos_asig"=>$this->input->post('creditos_asig')
		);
		$id=$this->input->post("id_asig");
		if ($this->asignatura->actualizar($id,$datosAsignaturaEditada)) {
			redirect('asignaturas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
