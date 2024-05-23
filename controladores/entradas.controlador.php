<?php

class ControladorEntradas{



	//mostrar categorias

	static public function ctrMostrarEntradas($item,$valor){

		$tabla = "entradap";

		$respuesta = ModeloEntrada::mdlMostrarEntradas($tabla,$item,$valor);

		return $respuesta;


	}



	//mostrar categorias

	static public function ctrMostrarSalidas($item,$valor){

		$tabla = "salidap";

		$respuesta = ModeloEntrada::mdlMostrarSalidas($tabla,$item,$valor);

		return $respuesta;


	}




	


}