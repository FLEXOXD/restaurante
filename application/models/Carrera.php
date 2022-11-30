<?php
  class Carrera extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("carrera",$datos);
    }
    // Función de consulta todas las carreras de la base de datos
    public function obtenerTodos(){
      $carrera=$this->db->get("carrera");
      if ($carrera->num_rows()>0) {
        return $carrera;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar una carrera se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_car",$id);
      return $this->db->delete("carrera");
    }
    //Consultando la carrera por su id
    public function ObtenerPorId($id){
      $this->db->where("id_car",$id);
      $carrera=$this->db->get("carrera");
      if ($carrera->num_rows()>0){
        return $carrera->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de carreras
    public function actualizar($id,$datos){
      $this->db->where("id_car",$id);
      return $this->db->update("carrera",$datos);
    }
  }//cierre de la clase (No borrar)
