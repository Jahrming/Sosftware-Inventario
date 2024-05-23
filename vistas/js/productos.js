

$(".tablas").on("click", ".btnEditarProductos", function(){


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


			var datosCategoria = new FormData();

			datosCategoria.append("idCategoria", respuesta["idcategoria"]);


	$.ajax({

		url:"ajax/categorias.ajax.php",
		method: "POST",
		data: datosCategoria,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){


			 $("#editarCategoria").val(respuesta["id"]);
			 $("#editarCategoria").html(respuesta["nombre"]);





			}

			})



		  $("#idproductos").val(respuesta["id"]);
			$("#editarCodigo").val(respuesta["codigo"]);
			$("#editarDescripcion").val(respuesta["descripcion"]);
			$("#editarStock").val(respuesta["stock"]);
			$("#editarPrecio").val(respuesta["precio"]);



		}



	})


})



$(".tablas").on("click", ".btnEliminarProductos", function(){


	var idProductos = $(this).attr("idProductos");



   swal({
    title: '¿Está seguro de borrar el producto?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: '¡Si, borrar el producto!'
   }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=productos&idProductos="+idProductos;

  }



   })






})



