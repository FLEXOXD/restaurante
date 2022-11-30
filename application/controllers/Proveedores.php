<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("proveedor");
	}

	public function index(){
		$data["listadoProveedores"]=$this->proveedor->obtenerTodos();
		$this->load->view('header');
		$this->load->view('proveedores/index',$data);
		$this->load->view('footer');
	}

  public function nuevo(){
    $this->load->view('header');
    $this->load->view('proveedores/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarProveedor(){
		$datosNuevoProveedor=array(
			"empresa_pro"=>$this->input->post('empresa_pro'),
			"producto_pro"=>$this->input->post('producto_pro'),
			"apellido_pro"=>$this->input->post('apellido_pro'),
			"nombre_pro"=>$this->input->post('nombre_pro'),
			"telefono_pro"=>$this->input->post('telefono_pro'),
			"direccion_pro"=>$this->input->post('direccion_pro')
		);
		print_r($datosNuevoProveedor);
		if ($this->proveedor->insertar($datosNuevoProveedor)) {
			redirect('proveedores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

	public function borrar($id_pro){
		if ($this->proveedor->eliminarPorId($id_pro)){
			redirect('proveedores/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["proveedorEditar"]=$this->proveedor->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("proveedores/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosProveedorEditado=array(
      "empresa_pro"=>$this->input->post('empresa_pro'),
			"producto_pro"=>$this->input->post('producto_pro'),
			"apellido_pro"=>$this->input->post('apellido_pro'),
			"nombre_pro"=>$this->input->post('nombre_pro'),
			"telefono_pro"=>$this->input->post('telefono_pro'),
			"direccion_pro"=>$this->input->post('direccion_pro')
		);
		$id=$this->input->post("id_pro");
		if ($this->proveedor->actualizar($id,$datosProveedorEditado)) {
			redirect('proveedores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
