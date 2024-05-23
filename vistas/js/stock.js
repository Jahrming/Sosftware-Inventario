

$(".tablas").on("click", ".btnEntrada", function(){


	var idProductos = $(this).attr("idProductos");


	var datos = new FormData();

	datos.append("idProductos", idProductos);


	$.ajax({


		url:"ajax/productos.ajax.php",
		method: "POST",
		data: datos,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){

		  $("#entradaid").val(respuesta["id"]);

			$("#entradaCodigo").val(respuesta["codigo"]);
			$("#entradaDescripcion").val(respuesta["descripcion"]);
			$("#entradaCategoria").val(respuesta["idcategoria"]);



		}



	})


})







$(".tablas").on("click", ".btnSalida", function(){


	var idProductos = $(this).attr("idProductos");


	var datos = new FormData();

	datos.append("idProductos", idProductos);


	$.ajax({


		url:"ajax/productos.ajax.php",
		method: "POST",
		data: datos,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){

		  $("#salidaid").val(respuesta["id"]);

			$("#salidaCodigo").val(respuesta["codigo"]);
			$("#salidaDescripcion").val(respuesta["descripcion"]);
			$("#salidaCategoria").val(respuesta["idcategoria"]);



		}



	})


})



