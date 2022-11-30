<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("plato");
    $this->load->model("mesa");
	}
  public function index(){
    $this->load->view("header");
    $this->load->view("pedidos/index");
    $this->load->view("footer");
  }
  public function nuevo(){
		$data["listadoPlatos"]=$this->plato->obtenerTodos();
		$data["listadoMesas"]=$this->mesa->obtenerTodos();
    $this->load->view("header");
    $this->load->view("pedidos/nuevo",$data);
    $this->load->view("footer");
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarPedido(){
		$datosNuevoPedido=array(
			"fk_id_plato"=>$this->input->post('fk_id_plato'),
			"fk_id_mesa"=>$this->input->post('fk_id_mesa')
			);
		print_r($datosNuevoPedido);
		if ($this->pedido->insertar($datosNuevoPedido)) {
			redirect('pedidos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	 	}
}
//cierre de la clase NO BORRAR
