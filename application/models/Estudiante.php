<?php
  class Estudiante extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("estudiante",$datos);
    }
    // Función de consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
      $estudiantes=$this->db->get("estudiante");
      if ($estudiantes->num_rows()>0) {
        return $estudiantes;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un estudiante se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_est",$id);
      return $this->db->delete("estudiante");
    }
    //Consultando el estudiante por su id
    public function ObtenerPorId($id){
      $this->db->where("id_est",$id);
      $estudiante=$this->db->get("estudiante");
      if ($estudiante->num_rows()>0){
        return $estudiante->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de estudiantes
    public function actualizar($id,$datos){
      $this->db->where("id_est",$id);
      return $this->db->update("estudiante",$datos);
    }
  }//cierre de la clase (No borrar)
