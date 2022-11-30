<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
	// definiendo el constructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("empleado");
	}
	// renderiza la vista index de empleados
	public function index(){
		$data["listadoEmpleados"]=$this->empleado->obtenerTodos();
		$this->load->view('header');
		$this->load->view('empleados/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de empleados
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('empleados/nuevo');
    $this->load->view('footer');
  }
	// funcion para capturar los valores del formulario Nuevo
	public function guardarEmpleado(){
		$datosNuevoEmpleado=array(
			"cedula_emp"=>$this->input->post('cedula_emp'),
			"nombre_emp"=>$this->input->post('nombre_emp'),
			"apellido_emp"=>$this->input->post('apellido_emp'),
			"telefono_emp"=>$this->input->post('telefono_emp'),
			"direccion_emp"=>$this->input->post('direccion_emp'),
			"correo_emp"=>$this->input->post('correo_emp')
		);
		print_r($datosNuevoEmpleado);
		if ($this->empleado->insertar($datosNuevoEmpleado)) {
			redirect('empleados/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
	//Función para eliminar empleados
	public function borrar($id_emp){
		if ($this->empleado->eliminarPorId($id_emp)){
			redirect('empleados/index');
		} else {
			echo "Error al eliminar :(";
		}
	}
	//Función para renderizar formulario de actualización
	public function actualizar($id){
		$data["empleadoEditar"]=$this->empleado->ObtenerPorId($id);
		$this->load->view("header");
		$this->load->view("empleados/actualizar",$data);
		$this->load->view("footer");
	}
	//Funcion para procesar botón actualización
	public function procesarActualizacion(){
		$datosEmpleadoEditado=array(
      "cedula_emp"=>$this->input->post('cedula_emp'),
			"nombre_emp"=>$this->input->post('nombre_emp'),
			"apellido_emp"=>$this->input->post('apellido_emp'),
			"telefono_emp"=>$this->input->post('telefono_emp'),
			"direccion_emp"=>$this->input->post('direccion_emp'),
			"correo_emp"=>$this->input->post('correo_emp')
		);
		$id=$this->input->post("id_emp");
		if ($this->empleado->actualizar($id,$datosEmpleadoEditado)) {
			redirect('empleados/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
}//cierre de la clase NO BORRAR
