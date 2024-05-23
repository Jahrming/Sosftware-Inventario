

$(".tablas").on("click", ".btnEditarCategorias", function(){


	var idCategoria = $(this).attr("idCategoria");


	var datos = new FormData();

	datos.append("idCategoria", idCategoria);


	$.ajax({


		url:"ajax/categorias.ajax.php",
		method: "POST",
		data: datos,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){

		   $("#idcategoria").val(respuesta["id"]);

			$("#editarCategoria").val(respuesta["nombre"]);
		



		}



	})


})



$(".tablas").on("click", ".btnEliminarCategorias", function(){


	var idCategoria = $(this).attr("idCategoria");



   swal({
    title: '¿Está seguro de borrar la categoria?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: '¡Si, borrar categoria!'
   }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=categorias&idCategoria="+idCategoria;

  }



   })


})



