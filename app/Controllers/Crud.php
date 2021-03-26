<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$Crud->instance();
		$datos = $Crud->listarNombres();

		$data = ["datos" => $datos];

		return view('listado',$data);
	}

	public function crear() {

	}

	public function actualizar() {

	}

	public function obtenerId($Idusuario) {

	}

	public function eliminar($Idusuario) {

	}
}
