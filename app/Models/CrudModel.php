<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class CrudModel extends Model {

    public function getUsuarios() {
      $Usuarios = $this->db->query("SELECT * FROM t_usuarios");

      return $Usuarios->getResult();
    }

    public function insertar($datos) {
      $Usuarios = $this->db->table('t_usuarios');
      $Usuarios->insert($datos);

      return $this->db->insertID();
    }

    public function obtenerId($data) {
      $Usuarios = $this->db->table('t_usuarios');
      $Usuarios->where($data);

      return $Usuarios->get()->getResultArray();
    }

    public function actualizar($data, $Id) {
      $Usuarios = $this->db->table('t_usuarios');
      $Usuarios->set($data);
      $Usuarios->where('Id',$Id);

      return $Usuarios->update();
    }

    public function eliminar($data) {
      $Usuarios = $this->db->table('t_usuarios');
      $Usuarios->where($data);

      return $Usuarios->delete();
    }
  }
