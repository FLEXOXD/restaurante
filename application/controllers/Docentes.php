<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("docente");
	}
	// renderiza la vista index de docentes
	public function index()
	{
		$data["listadoDocentes"]=$this->docente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('docentes/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de docentes
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('docentes/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarDocente(){
		$datosNuevoDocente=array(
			"cedula_doc"=>$this->input->post('cedula_doc'),
			"apellido_doc"=>$this->input->post('apellido_doc'),
			"nombre_doc"=>$this->input->post('nombre_doc'),
			"telefono_doc"=>$this->input->post('telefono_doc'),
			"direccion_doc"=>$this->input->post('direccion_doc'),
			"fecha_nacimiento_doc"=>$this->input->post('fecha_nacimiento_doc')
		);
		print_r($datosNuevoDocente);
		if ($this->docente->insertar($datosNuevoDocente)) {
			redirect('docentes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar docentes
	public function borrar($id_doc){
		if ($this->docente->eliminarPorId($id_doc)){
			redirect('docentes/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["docenteEditar"]=$this->docente->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("docentes/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosDocenteEditado=array(
			"cedula_doc"=>$this->input->post('cedula_doc'),
			"apellido_doc"=>$this->input->post('apellido_doc'),
			"nombre_doc"=>$this->input->post('nombre_doc'),
			"telefono_doc"=>$this->input->post('telefono_doc'),
			"direccion_doc"=>$this->input->post('direccion_doc'),
			"fecha_nacimiento_doc"=>$this->input->post('fecha_nacimiento_doc')
		);
		$id=$this->input->post("id_doc");
		if ($this->docente->actualizar($id,$datosDocenteEditado)) {
			redirect('docentes/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
