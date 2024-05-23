<?php

class ControladorCategorias{



	static public function ctrCrearCategorias(){

		if (isset($_POST['nombrecategoria'])) {

			$tabla = "categorias";


			$datos =  array('nombre' => $_POST['nombrecategoria']);


			


			$respuesta = ModeloCategorias::mdlGuardarCategorias($tabla,$datos);


			if ($respuesta == "ok") {


				echo'<script>

					swal({
						  type: "success",
						  title: "La categorias ha sido registrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "La categoria  no pudo ser registrada",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';



			}


			
		}


	}







	//mostrar categorias

	static public function ctrMostrarCategorias($item,$valor){

		$tabla = "categorias";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla,$item,$valor);

		return $respuesta;


	}





	static public function ctrEditarCategorias(){

		if (isset($_POST['editarCategoria'])) {

			$tabla = "categorias";

			$datos =  array('id' => $_POST['idcategoria'],
							'nombre' => $_POST['editarCategoria']);


			//print_r($datos);


			


		$respuesta = ModeloCategorias::mdlEditarCategorias($tabla,$datos);


			if ($respuesta == "ok") {




				echo'<script>

					swal({
						  type: "success",
						  title: "La categoria ha sido Modificada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "La categoria no ha sido modificada",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';



			}


			
		}


	}


	static public function ctrBorrarCategorias(){


		if (isset($_GET["idCategoria"])) {

			$tabla = "categorias";
			$datos = $_GET['idCategoria'];


			$respuesta = ModeloCategorias::mdlBorrarCategorias($tabla,$datos);


			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "La categoria ha sido eliminada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "La categoria no  ha sido eliminado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "categorias";

									}
								})

					</script>';



			}




			
		}


	}


	


}