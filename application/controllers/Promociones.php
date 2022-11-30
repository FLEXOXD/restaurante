<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("plato");
	}
  public function index(){
    $this->load->view("header");
    $this->load->view("promociones/index");
    $this->load->view("footer");
  }
  public function nuevo(){
		$data["listadoPlatos"]=$this->plato->obtenerTodos();
    $this->load->view("header");
    $this->load->view("promociones/nuevo",$data);
    $this->load->view("footer");
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarPromocion(){
		$datosNuevaPromocion=array(
			"id_prom"=>$this->input->post('id_prom'),
			"fk_id_plato"=>$this->input->post('fk_id_plato'),
			"descripcion_prom"=>$this->input->post('descripcion_prom')
			);
		print_r($datosNuevaPromocion);
		if ($this->promocion->insertar($datosNuevaPromocion)) {
			redirect('promociones/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	 	}
}
//cierre de la clase NO BORRAR
