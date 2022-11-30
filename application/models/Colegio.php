<?php
  class Colegio extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("colegio_mkd",$datos);
    }
    // Función de consulta todos los colegios de la base de datos
    public function obtenerTodos(){
      $colegios=$this->db->get("colegio_mkd");
      if ($colegios->num_rows()>0) {
        return $colegios;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un colegio se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_mkd",$id);
      return $this->db->delete("colegio_mkd");
    }
    //Consultando el colegio por su id
    public function ObtenerPorId($id){
      $this->db->where("id_mkd",$id);
      $colegio=$this->db->get("colegio_mkd");
      if ($colegio->num_rows()>0){
        return $colegio->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de colegio
    public function actualizar($id,$datos){
      $this->db->where("id_mkd",$id);
      return $this->db->update("colegio_mkd",$datos);
    }
  }//cierre de la clase (No borrar)
