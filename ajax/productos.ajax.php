<?php

require_once '../controladores/productos.controlador.php';
require_once '../modelos/productos.modelo.php';


class AjaxProductos{

	public $idProductos;

	public function AjaxEditarProductos(){


		$item = "id";
		$valor = $this->idProductos;


		$respuesta = ControladorProductos::ctrMostrarProductos($item,$valor);

		echo json_encode($respuesta);


	}


}



if (isset($_POST["idProductos"])) {


	$editar =  new AjaxProductos();
	$editar->idProductos = $_POST['idProductos'];
	$editar->AjaxEditarProductos();


	
}