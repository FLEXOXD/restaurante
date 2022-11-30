<?php
  class Matricula extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("matricula",$datos);
    }
    // Función de consulta todas las matriculas de la base de datos
    public function obtenerTodos(){
      $matriculas=$this->db->get("matricula");
      if ($matriculas->num_rows()>0) {
        return $matriculas;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar una matricula se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_mat",$id);
      return $this->db->delete("matricula");
    }
    //Consultando el matricula por su id
    public function ObtenerPorId($id){
      $this->db->where("id_mat",$id);
      $matricula=$this->db->get("matricula");
      if ($matricula->num_rows()>0){
        return $matricula->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de matriculas
    public function actualizar($id,$datos){
      $this->db->where("id_mat",$id);
      return $this->db->update("matricula",$datos);
    }
  }//cierre de la clase (No borrar)
