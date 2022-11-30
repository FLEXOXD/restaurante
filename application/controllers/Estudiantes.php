<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("estudiante");
	}
	// renderiza la vista index de estudiantes
	public function index(){
		$data["listadoEstudiantes"]=$this->estudiante->obtenerTodos();
		$this->load->view('header');
		$this->load->view('estudiantes/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de estudiantes
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('estudiantes/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarEstudiante(){
		$datosNuevoEstudiante=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')
		);
		print_r($datosNuevoEstudiante);
		if ($this->estudiante->insertar($datosNuevoEstudiante)) {
			redirect('estudiantes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar estudiantes
	public function borrar($id_est){
		if ($this->estudiante->eliminarPorId($id_est)){
			redirect('estudiantes/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["estudianteEditar"]=$this->estudiante->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("estudiantes/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosEstudianteEditado=array(
			"cedula_est"=>$this->input->post('cedula_est'),
			"apellido_est"=>$this->input->post('apellido_est'),
			"nombre_est"=>$this->input->post('nombre_est'),
			"telefono_est"=>$this->input->post('telefono_est'),
			"direccion_est"=>$this->input->post('direccion_est'),
			"fecha_nacimiento_est"=>$this->input->post('fecha_nacimiento_est')
		);
		$id=$this->input->post("id_est");
		if ($this->estudiante->actualizar($id,$datosEstudianteEditado)) {
			redirect('estudiantes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
