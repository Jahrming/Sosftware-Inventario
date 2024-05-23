<?php

require_once 'conexion.php';


class ModeloProductos{


	static public function mdlGuardarProductos($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idcategoria,codigo,descripcion,stock, precio) VALUES(:idcategoria, :codigo, :descripcion, :stock, :precio) ");

		$stmt->bindParam(":idcategoria", $datos["idcategoria"], PDO::PARAM_INT);

		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}


	static public function mdlGuardarProductosEntrada($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo,descripcion,nombrecategoria, entrada) VALUES(:codigo, :descripcion, :nombrecategoria, :entrada) ");


		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrecategoria", $datos["nombrecategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":entrada", $datos["entrada"], PDO::PARAM_INT);
		


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}



	static public function mdlGuardarProductosSalida($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo,descripcion,nombrecategoria, salida) VALUES(:codigo, :descripcion, :nombrecategoria, :salida) ");


		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":nombrecategoria", $datos["nombrecategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":salida", $datos["salida"], PDO::PARAM_INT);
		


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}







	//mostrar productos

	static public function mdlMostrarProductos($tabla,$item,$valor){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetch();



			
		}else{


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();



		}


	}



	static public function mdlEditarProductos($tabla,$datos){


	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET idcategoria = :idcategoria, codigo = :codigo, descripcion = :descripcion, stock = :stock, precio = :precio WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		$stmt->bindParam(":idcategoria", $datos["idcategoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);


		


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}


	static public function mdlBorrarProductos($tabla,$datos){



		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE id = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);

	

		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}



	static public function mdlActualizarProductosEntrada($tablaDos,$itemDos,$valor,$resultado){


		$stmt = Conexion::conectar()->prepare("UPDATE $tablaDos SET $itemDos = :$itemDos  WHERE id = :id");

		$stmt->bindParam(":".$itemDos, $resultado, PDO::PARAM_STR);
		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;





	}







	}



