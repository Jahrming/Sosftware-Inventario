$(".tablas").on("click", ".btnEditarUsuario", function(){


	var idUsuario = $(this).attr("idUsuario");


	var datos = new FormData();

	datos.append("idUsuario", idUsuario);


	$.ajax({


		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache:false,
		contentType:false,
		processData:false,
		dataType:"json",
		success:function(respuesta){

		    $("#id").val(respuesta["id"]);

			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarUsuario").val(respuesta["usuario"]);
			$("#editarPerfil").val(respuesta["perfil"]);



		}



	})


})



$(".tablas").on("click", ".btnEliminarUsuario", function(){


	var idUsuario = $(this).attr("idUsuario");



   swal({
    title: '¿Está seguro de borrar el usuario?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: '¡Si, borrar usuario!'
   }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario;

  }



   })






})



