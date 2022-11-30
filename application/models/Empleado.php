<?php
  class Empleado extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("empleado",$datos);
    }
    // Función de consulta todos los empleados de la base de datos
    public function obtenerTodos(){
      $empleados=$this->db->get("empleado");
      if ($empleados->num_rows()>0) {
        return $empleados;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un empleado se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_emp",$id);
      return $this->db->delete("empleado");
    }
    //Consultando el empleado por su id
    public function ObtenerPorId($id){
      $this->db->where("id_emp",$id);
      $empleado=$this->db->get("empleado");
      if ($empleado->num_rows()>0){
        return $empleado->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de empleados
    public function actualizar($id,$datos){
      $this->db->where("id_emp",$id);
      return $this->db->update("empleado",$datos);
    }
  }//cierre de la clase (No borrar)
