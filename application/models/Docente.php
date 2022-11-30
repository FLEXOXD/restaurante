<?php
  class Docente extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("docente",$datos);
    }
    // Función de consulta todos los docentes de la base de datos
    public function obtenerTodos(){
      $docentes=$this->db->get("docente");
      if ($docentes->num_rows()>0) {
        return $docentes;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un docente se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_doc",$id);
      return $this->db->delete("docente");
    }
    //Consultando el docente por su id
    public function ObtenerPorId($id){
      $this->db->where("id_doc",$id);
      $docente=$this->db->get("docente");
      if ($docente->num_rows()>0){
        return $docente->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de docentes
    public function actualizar($id,$datos){
      $this->db->where("id_doc",$id);
      return $this->db->update("docente",$datos);
    }
  }//cierre de la clase (No borrar)
