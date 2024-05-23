<?php

class ControladorProductos{



	static public function ctrCrearProductos(){

		if (isset($_POST['codigo'])) {

			$tabla = "productos";



			$datos =  array('idcategoria' => $_POST['categoria'],
						    'codigo' => $_POST['codigo'],
						    'descripcion' =>$_POST['descripcion'],
						    'stock' => $_POST['stock'],
							'precio' => $_POST['precio']);


			


			$respuesta = ModeloProductos::mdlGuardarProductos($tabla,$datos);


			if ($respuesta == "ok") {


				echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido registrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El producto  no pudo ser registrado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';



			}


			
		}


	}







	//mostrar productos

	static public function ctrMostrarProductos($item,$valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarProductos($tabla,$item,$valor);

		return $respuesta;


	}





	static public function ctrEditarProductos(){

		if (isset($_POST['editarCodigo'])) {

			$tabla = "productos";

		


			$datos =  array('id' => $_POST['idproductos'],
						'idcategoria' => $_POST['editarCategoria'],
						    'codigo' => $_POST['editarCodigo'],
						    'descripcion' =>$_POST['editarDescripcion'],
						    'stock' => $_POST['editarStock'],
							'precio' => $_POST['editarPrecio']);



			//print_r($datos);


			


		$respuesta = ModeloProductos::mdlEditarProductos($tabla,$datos);


			if ($respuesta == "ok") {




				echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido Modificado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El producto  no ha sido modificado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';



			}


			
		}


	}


	static public function ctrBorrarProductos(){


		if (isset($_GET["idProductos"])) {

			$tabla = "productos";
			$datos = $_GET['idProductos'];


			$respuesta = ModeloProductos::mdlBorrarProductos($tabla,$datos);


			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El producto ha sido eliminado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';



			}




			
		}


	}





	static public function ctrCrearEntrada(){

		if (isset($_POST['entradaCodigo'])) {

			$tabla = "entradap";


			$datos =  array(
						    'codigo' => $_POST['entradaCodigo'],
						    'descripcion' =>$_POST['entradaDescripcion'],
						    'nombrecategoria' => $_POST['entradaCategoria'],
						    'entrada' => $_POST['entrada']);


			


		$respuesta = ModeloProductos::mdlGuardarProductosEntrada($tabla,$datos);

			$tablaDos = "productos";

			$item = "id";
			$valor = $_POST['entradaid'];


			$traerProducto = ControladorProductos::ctrMostrarProductos($item,$valor);

			//var_dump($traerProducto);

			$itemDos = "stock";


			foreach($traerProducto as $key =>$valor){

				$resultado = $traerProducto["stock"] + $_POST["entrada"];

				$modificar = ModeloProductos::mdlActualizarProductosEntrada($tablaDos,$itemDos,$valor,$resultado);


			}



			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "La entrada ha sido realizada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El stock no pudo ser aumentado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';



			}









			
		}


	}








	static public function ctrCrearSalida(){

		if (isset($_POST['salidaCodigo'])) {

			$tabla = "salidap";


			$datos =  array(
						    'codigo' => $_POST['salidaCodigo'],
						    'descripcion' =>$_POST['salidaDescripcion'],
						    'nombrecategoria' => $_POST['salidaCategoria'],
						    'salida' => $_POST['salida']);


			


		$respuesta = ModeloProductos::mdlGuardarProductosSalida($tabla,$datos);

			$tablaDos = "productos";

			$item = "id";
			$valor = $_POST['salidaid'];


			$traerProducto = ControladorProductos::ctrMostrarProductos($item,$valor);

			//var_dump($traerProducto);

			$itemDos = "stock";


			foreach($traerProducto as $key =>$valor){

				$resultado = $traerProducto["stock"] - $_POST["salida"];

				$modificar = ModeloProductos::mdlActualizarProductosEntrada($tablaDos,$itemDos,$valor,$resultado);


			}



			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "La salida ha sido realizada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El stock no pudo ser disminuido",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "productos";

									}
								})

					</script>';



			}









			
		}


	}




	


}