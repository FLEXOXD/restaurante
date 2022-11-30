<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesas extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("mesa");
	}
	// renderiza la vista index de mesas
	public function index(){
		$data["listadoMesas"]=$this->mesa->obtenerTodos();
		$this->load->view('header');
		$this->load->view('mesas/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de mesas
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('mesas/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarMesa(){
		$datosNuevaMesa=array(
			"numero_mesa"=>$this->input->post('numero_mesa')
		);
		print_r($datosNuevaMesa);
		if ($this->mesa->insertar($datosNuevaMesa)) {
			redirect('mesas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar mesas
	public function borrar($id_mesa){
		if ($this->mesa->eliminarPorId($id_mesa)){
			redirect('mesas/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["mesaEditar"]=$this->mesa->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("mesas/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosMesaEditada=array(
			"numero_mesa"=>$this->input->post('numero_mesa')
		);
		$id=$this->input->post("id_mesa");
		if ($this->mesa->actualizar($id,$datosMesaEditada)) {
			redirect('mesas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
