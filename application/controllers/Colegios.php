<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colegios extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("colegio");
	}
	// renderiza la vista index de colegios
	public function index()
	{
		$data["listadoColegios"]=$this->colegio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('colegios/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de colegios
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('colegios/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarColegio(){
		$datosNuevoColegio=array(
			"nombre_mkd"=>$this->input->post('nombre_mkd'),
			"director_mkd"=>$this->input->post('director_mkd'),
			"direccion_mkd"=>$this->input->post('direccion_mkd'),
			"correo_mkd"=>$this->input->post('correo_mkd')
		);
		print_r($datosNuevoColegio);
		if ($this->colegio->insertar($datosNuevoColegio)) {
			redirect('colegios/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Funcion para eliminar colegios
	public function borrar($id_mkd){
		if ($this->colegio->eliminarPorId($id_mkd)){
			redirect('colegios/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["colegioEditar"]=$this->colegio->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("colegios/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosColegioEditado=array(
			"nombre_mkd"=>$this->input->post('nombre_mkd'),
			"director_mkd"=>$this->input->post('director_mkd'),
			"direccion_mkd"=>$this->input->post('direccion_mkd'),
			"correo_mkd"=>$this->input->post('correo_mkd')
		);
		$id=$this->input->post("id_mkd");
		if ($this->colegio->actualizar($id,$datosColegioEditado)) {
			redirect('colegios/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}
