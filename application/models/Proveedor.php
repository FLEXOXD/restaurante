<?php
  class Proveedor extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("proveedor",$datos);
    }
    // Función de consulta todos los empleados de la base de datos
    public function obtenerTodos(){
      $proveedores=$this->db->get("proveedor");
      if ($proveedores->num_rows()>0) {
        return $proveedores;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un empleado se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_pro",$id);
      return $this->db->delete("proveedor");
    }
    //Consultando el empleado por su id
    public function ObtenerPorId($id){
      $this->db->where("id_pro",$id);
      $proveedores=$this->db->get("proveedor");
      if ($proveedores->num_rows()>0){
        return $proveedores->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de empleados
    public function actualizar($id,$datos){
      $this->db->where("id_pro",$id);
      return $this->db->update("proveedor",$datos);
    }
  }//cierre de la clase (No borrar)
