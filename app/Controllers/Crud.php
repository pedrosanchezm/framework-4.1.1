<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$datos = $Crud->listarNombres();

		$mensaje = session('mensaje');

		$data = ["datos" => $datos, "mensaje" => $mensaje];

		return view('listado',$data);
	}

	public function crear() {
		//print_r($_POST);
		$datos = [
			"Nombre" => $_POST['nombre'],
			"Apellido" => $_POST['apellido'],
			"Correo" => $_POST['correo']
		];

		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($datos);

		if($respuesta > 0){
			return redirect()->to(base_url().'/')->with('mensaje','1');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','0');
		}
	}

	public function actualizar() {

	}

	public function obtenerId($Idusuario) {

	}

	public function eliminar($Idusuario) {

	}
}
