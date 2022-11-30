<?php
  class Plato extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("plato",$datos);
    }
    // Función de consulta todos los platos de la base de datos
    public function obtenerTodos(){
      $platos=$this->db->get("plato");
      if ($platos->num_rows()>0) {
        return $platos;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un plato se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_plato",$id);
      return $this->db->delete("plato");
    }
    //Consultando el plato por su id
    public function ObtenerPorId($id){
      $this->db->where("id_plato",$id);
      $plato=$this->db->get("plato");
      if ($plato->num_rows()>0){
        return $plato->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de platos
    public function actualizar($id,$datos){
      $this->db->where("id_plato",$id);
      return $this->db->update("plato",$datos);
    }
  }//cierre de la clase (No borrar)
