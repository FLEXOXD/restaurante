<?php
  class Promocion extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("promocion",$datos);
    }
    // Función de consulta todas las promociones de la base de datos
    public function obtenerTodos(){
      $promociones=$this->db->get("promocion");
      if ($promociones->num_rows()>0) {
        return $promociones;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar una promoción se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_prom",$id);
      return $this->db->delete("promocion");
    }
    //Consultando la promoción por su id
    public function ObtenerPorId($id){
      $this->db->where("id_prom",$id);
      $promocion=$this->db->get("promocion");
      if ($promocion->num_rows()>0){
        return $promocion->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de promociones
    public function actualizar($id,$datos){
      $this->db->where("id_prom",$id);
      return $this->db->update("promocion",$datos);
    }
  }//cierre de la clase (No borrar)
