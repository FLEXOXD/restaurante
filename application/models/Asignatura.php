<?php
  class Asignatura extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("asignatura",$datos);
    }
    // Función de consulta todos las asignaturas de la base de datos
    public function obtenerTodos(){
      $asignaturas=$this->db->get("asignatura");
      if ($asignaturas->num_rows()>0) {
        return $asignaturas;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar una asignatura se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_asig",$id);
      return $this->db->delete("asignatura");
    }
    //Consultando el asignatura por su id
    public function ObtenerPorId($id){
      $this->db->where("id_asig",$id);
      $asignatura=$this->db->get("asignatura");
      if ($asignatura->num_rows()>0){
        return $asignatura->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de asignatura
    public function actualizar($id,$datos){
      $this->db->where("id_asig",$id);
      return $this->db->update("asignatura",$datos);
    }
  }//cierre de la clase (No borrar)
