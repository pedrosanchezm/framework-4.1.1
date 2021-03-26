<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class CrudModel extends Model {
    public function listarNombres() {
      $Nombres = $this->db->query("SELECT * FROM t_usuarios");
      return $Nombres->getResult();
    }
  }
