<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carreras extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("carrera");
	}
	// renderiza la vista index de carreras
	public function index()
	{
		$data["listadoCarreras"]=$this->carrera->obtenerTodos();
		$this->load->view('header');
		$this->load->view('carreras/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de carreras
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('carreras/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarCarrera(){
		$datosNuevaCarrera=array(
			"nombre_car"=>$this->input->post('nombre_car'),
			"decano_car"=>$this->input->post('decano_car'),
			"facultad_car"=>$this->input->post('facultad_car'),
			"bloque_car"=>$this->input->post('bloque_car'),
			"telefono_car"=>$this->input->post('telefono_car')
		);
		print_r($datosNuevaCarrera);
		if ($this->carrera->insertar($datosNuevaCarrera)) {
			redirect('carreras/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar carreras
	public function borrar($id_car){
		if ($this->carrera->eliminarPorId($id_car)){
			redirect('carreras/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["carreraEditar"]=$this->carrera->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("carreras/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosCarreraEditada=array(
      "nombre_car"=>$this->input->post('nombre_car'),
			"decano_car"=>$this->input->post('decano_car'),
			"facultad_car"=>$this->input->post('facultad_car'),
			"bloque_car"=>$this->input->post('bloque_car'),
			"telefono_car"=>$this->input->post('telefono_car')
		);
		$id=$this->input->post("id_car");
		if ($this->carrera->actualizar($id,$datosCarreraEditada)) {
			redirect('carreras/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
