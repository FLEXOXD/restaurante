<?php
  class Mesa extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("mesa",$datos);
    }
    // Función de consulta todos las mesas de la base de datos
    public function obtenerTodos(){
      $mesas=$this->db->get("mesa");
      if ($mesas->num_rows()>0) {
        return $mesas;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar una mesa se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_mesa",$id);
      return $this->db->delete("mesa");
    }
    //Consultando la mesa por su id
    public function ObtenerPorId($id){
      $this->db->where("id_mesa",$id);
      $mesa=$this->db->get("mesa");
      if ($mesa->num_rows()>0){
        return $mesa->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de mesas
    public function actualizar($id,$datos){
      $this->db->where("id_mesa",$id);
      return $this->db->update("mesa",$datos);
    }
  }//cierre de la clase (No borrar)
