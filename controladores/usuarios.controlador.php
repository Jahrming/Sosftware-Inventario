<?php

class ControladorUsuarios{



	static public function ctrIngresarUsuario(){


		if (isset($_POST["ingresoUsuario"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoUsuario"])){

				$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$tabla = "usuarios";

			$item = "usuario";
			$valor = $_POST['ingresoUsuario'];

			$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);


			if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $encriptar) {

				$_SESSION['iniciarSesion'] = "ok";
				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["nombre"] = $respuesta["nombre"];
				$_SESSION["usuario"] = $respuesta["usuario"];
				$_SESSION["perfil"] = $respuesta["perfil"];


				echo '<script>

				window.location = "index.php";


				</script>';

				
			}else{


				echo '<br><div class="alert alert-danger">Error al ingresar, vuelvo a intentarlo</div>';



			}







				
			}

			
		}


	}



	static public function ctrCrearUsuarios(){

		if (isset($_POST['usuario'])) {

			$tabla = "usuarios";

			$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$datos =  array('nombre' => $_POST['nombre'],
						    'usuario' => $_POST['usuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['perfil']);


			


			$respuesta = ModeloUsuarios::mdlGuardarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {


				echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido registrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El usuario  no pudo ser registrado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';



			}


			
		}


	}







	//mostrar usuarios

	static public function ctrMostrarUsuarios($item,$valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);

		return $respuesta;


	}





	static public function ctrEditarUsuarios(){

		if (isset($_POST['editarUsuario'])) {

			$tabla = "usuarios";

			$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$datos =  array('id' => $_POST['id'],
							'nombre' => $_POST['editarNombre'],
						    'usuario' => $_POST['editarUsuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['editarPerfil']);


			//print_r($datos);


			


		$respuesta = ModeloUsuarios::mdlEditarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {




				echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido Modificado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El usuario  no ha sido modificado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';



			}


			
		}


	}


	static public function ctrBorrarUsuarios(){


		if (isset($_GET["idUsuario"])) {

			$tabla = "usuarios";
			$datos = $_GET['idUsuario'];


			$respuesta = ModeloUsuarios::mdlBorrarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El usuario ha sido eliminado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';



			}




			
		}


	}


	


}