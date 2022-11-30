<?php
  class Pedido extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    public function insertar($datos){
      return $this->db->insert("pedido",$datos);
    }
    // Función de consulta todas ls pedidos de la base de datos
    public function obtenerTodos(){
      $pedidos=$this->db->get("pedido");
      if ($pedidos->num_rows()>0) {
        return $pedidos;
      } else {
        return false; //cuando no hay datos
      }
    }
    //función para eliminar un pedido se recibe el //
    public function eliminarPorId($id){
      $this->db->where("id_ped",$id);
      return $this->db->delete("pedido");
    }
    //Consultando el pedido por su id
    public function ObtenerPorId($id){
      $this->db->where("id_ped",$id);
      $pedido=$this->db->get("pedido");
      if ($pedido->num_rows()>0){
        return $pedido->row(); //porque solo hay uno
      } else {
        return false;
      }
    }
    //Proceso de actualización de pedidos
    public function actualizar($id,$datos){
      $this->db->where("id_ped",$id);
      return $this->db->update("pedido",$datos);
    }
  }//cierre de la clase (No borrar)
