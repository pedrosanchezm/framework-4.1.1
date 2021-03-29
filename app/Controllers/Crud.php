<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$data = $Crud->getUsuarios();

		$mensaje = session('mensaje');

		$data_array = ["datos" => $data, "mensaje" => $mensaje];

		return view('usuarios',$data_array);
	}

	public function crear() {
		//print_r($_POST);
		$data = [
			"Nombre" => $_POST['nombre'],
			"Apellido" => $_POST['apellido'],
			"Correo" => $_POST['correo']
		];

		$Crud = new CrudModel();
		$respuesta = $Crud->insertar($data);

		if($respuesta > 0){
			return redirect()->to(base_url().'/')->with('mensaje','0');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','1');
		}
	}

	public function actualizar() {
		$data = [
			"Nombre" => $_POST['nombre'],
			"Apellido" => $_POST['apellido'],
			"Correo" => $_POST['correo']
		];
		$Id = $_POST['Id'];
		$Crud = new CrudModel();
		$respuesta = $Crud->actualizar($data, $Id);

		if($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}

	public function obtenerId($Idusuario) {
		$data = ["Id" => $Idusuario];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerId($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}

	public function eliminar($Idusuario) {
		$data = ["Id" => $Idusuario];
		$Crud = new CrudModel();
		$respuesta = $Crud->eliminar($data);

		if($respuesta){
			return redirect()->to(base_url().'/')->with('mensaje','4');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}
	}
}
