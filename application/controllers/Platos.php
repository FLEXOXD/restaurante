<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platos extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("plato");
	}
	// renderiza la vista index de platos
	public function index(){
		$data["listadoPlatos"]=$this->plato->obtenerTodos();
		$this->load->view('header');
		$this->load->view('platos/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de platos
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('platos/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarPlato(){
		$datosNuevoPlato=array(
			"nombre_plato"=>$this->input->post('nombre_plato'),
			"precio_plato"=>$this->input->post('precio_plato'),
			"descripcion_plato"=>$this->input->post('descripcion_plato')
		);
		print_r($datosNuevoPlato);
		if ($this->plato->insertar($datosNuevoPlato)) {
			redirect('platos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar platos
	public function borrar($id_plato){
		if ($this->plato->eliminarPorId($id_plato)){
			redirect('platos/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["platoEditar"]=$this->plato->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("platos/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosPlatoEditado=array(
      "nombre_plato"=>$this->input->post('nombre_plato'),
			"precio_plato"=>$this->input->post('precio_plato'),
			"descripcion_plato"=>$this->input->post('descripcion_plato')
		);
		$id=$this->input->post("id_plato");
		if ($this->plato->actualizar($id,$datosPlatoEditado)) {
			redirect('platos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
