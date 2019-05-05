$(document).ready(function($) {

	/*CARPETAS*/
	console.log("listo");	
	var parametros = "carpeta="+$("#carpetaActual").val();
	$.ajax({
		url:"ajax/carpeta.php?accion=obtener",
		dataType:'json',
		method:"POST",
		data:parametros,
		success:function(respuesta){
			console.log("carpetas");
			console.log(respuesta);
			for (i = 0; i < respuesta.length ; i++) {

				$("#carpetas").append(
					`<div class="col-md-2 carpeta m-2">
					<a href="googledrive.php?carpeta=${respuesta[i].nombre}"><i class="fas fa-folder tamanio"></i> <span class="nombre">${respuesta[i].nombre}</span> </a>
					</div>`
					);
			}	
			
		}
	});

	/*ARCHIVOS*/

	console.log("Archivos por carpetas");	
	var parametros = "carpeta="+$("#carpetaActual").val()+"&usuario="+$("#usuario").val();
	$.ajax({
		url:"ajax/archivo.php?accion=obtener",
		dataType:'json',
		method:"POST",
		data:parametros,
		success:function(respuesta){
			console.log("archivos");
			console.log(respuesta);



			for (var i = 0; i < respuesta.length; i++) {

				if (respuesta[i].extencion == ".docx") {
					var img = "img/word.png"; 
				}
				if (respuesta[i].extencion == ".txt") {
					var img = "img/txt.png"; 
				}
				if (respuesta[i].extencion == ".pdf") {
					var img = "img/pdf.jpg"; 
				}
				if (respuesta[i].extencion == ".xlsx") {
					var img = "img/excel.jpg"; 
				}
				if (respuesta[i].extencion == ".jpg" || respuesta[i].extencion == ".png") {
					var img = "ajax/archivos/"+respuesta[i].nombre;
				}
				

				$("#archivos").append(`
					<div class="col-md-2 p-2 m-4">
					<div class="card" style="width: 200px;">
					<img style="width:200px; height: 178px; " src="${img}" class="card-img-top text-center" alt="...">
					<div class="card-body"style="padding-top: 0px;"><p class="card-text text-center">${respuesta[i].nombre}</p></div>
					</div> 
					</div>
					`);

			}	
		}
	});

});


$("#btn-crearUsr").click(function () {
	// body...
	//alert("Funciona");
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var correo = $("#correo").val();
	var contra1 = $("#contra1").val();
	var contra2 = $("#contra2").val();

	if($("#contra1").val()=="" && $("#contra2").val()==""){
		alert("Campos requeridos");
		return;

	}

	if($("#contra1").val()!=$("#contra2").val()){
		alert("No coinciden la contraseña");
		return;

	}

	var parametros = "nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&contra1="+contra1+"&contra2="+contra2;
	//console.log(parametros)

	$.ajax({
		url:'ajax/usuario.php?accion=agregar',
		method:'POST',
		data:parametros,
		dataType:'json',
		success:function(res){
			console.log(res);

			if (res.Codigo == 1) {
				//location.href ="googledrive.php";
			}



		}
	});
	
});

$("#btn-login").click(function () {
	
	if ($("#correo-inicio").val()=="") {
		//alert("Correo vacio");
		$("#respuesta").html(
			`<div class="alert alert-danger" role="alert">
			correo incorrecto
			</div>`);
		return;
	}

	var correo = $("#correo-inicio").val();
	var parametros = "correo="+correo;

	$.ajax({
		url:'ajax/usuario.php?accion=validarCorreo',
		method:'POST',
		data:parametros,
		dataType:'json',
		success:function(res){
			console.log(res);

			if(res.status == 1){
				location.href ="contrasenia.php?correo="+correo;
			}else{
				$("#respuesta").html(`<div class="alert alert-danger" role="alert">
					correo incorrecto
					</div>`)
			}

		}
	});
});


$("#btn-contrasenia").click(function () {
	
	if ($("#contrasenia").val()=="") {
		//alert("Correo vacio");
		$("#respuesta").html(
			`<div class="alert alert-danger" role="alert">
			correo incorrecto
			</div>`);
		return;
	}

	var contrasenia = $("#contrasenia").val();
	var parametros = "contrasenia="+contrasenia+"&correo="+$("#correo").val();

	console.log(parametros);

	$.ajax({
		url:'ajax/usuario.php?accion=validarContrasenia',
		method:'POST',
		data:parametros,
		dataType:'json',
		success:function(res){
			console.log(res);

			if(res.status == 1){
				location.href ="googledrive.php?";
			}else{
				$("#respuesta").html(`<div class="alert alert-danger" role="alert">
					correo incorrecto
					</div>`)
			}

		}
	});
});



$("#btn-contrasenia").click(function () {
	
	if ($("#contrasenia").val()=="") {
		//alert("Correo vacio");
		$("#respuesta").html(
			`<div class="alert alert-danger" role="alert">
			correo incorrecto
			</div>`);
		return;
	}

	var contrasenia = $("#contrasenia").val();
	var parametros = "contrasenia="+contrasenia;
	$.ajax({
		url:'ajax/usuario.php?accion=validarContrasenia',
		method:'POST',
		data:parametros,
		dataType:'json',
		success:function(res){
			console.log(res);

			if(res.status == 1){
				location.href ="googledrive.php?";
			}else{
				$("#res").html(`<div class="alert alert-danger" role="alert">
					correo incorrecto
					</div>`)
			}

		}
	});
});

$("#btn-crear").click(function() {

	var parametros = "usuario="+$("#usuario").val()+"&nombre="+$("#nombreC").val()+"&carpeta="+$("#carpetaActual").val();

	console.log(parametros);

	$.ajax({
		url:"ajax/carpeta.php?accion=agregar",
		dataType:'json',
		method:"POST",
		data:parametros,
		success:function(respuesta){
			//console.log("ajax");
			console.log(respuesta);
			if (respuesta.estado==1) {
				$("#mensaje").hide();
				$("#carpetas").append(
					`<div class="col-md-2 carpeta m-2">
					<a href="googledrive.php?carpeta=${$("#nombreC").val()}"><i class="fas fa-folder tamanio"></i> <span class="nombre">${$("#nombreC").val()}</span> </a>
					</div>`
					);

			}	
		}
	});
});

$(function(){
	$("input[name='file']").on("change", function(){
		var formData = new FormData($("#formulario")[0]);
      //var ruta = "ajax-imagen.php";

      var parametros = "&usuario="+$("#usuario").val()+"&carpeta="+$("#carpetaActual").val();
      var ruta = "ajax/archivo.php?accion=agregar"+parametros;

      console.log(ruta);
      $.ajax({
      	url: ruta,
      	type: "POST",
      	data: formData,
      	datatype: 'json',
      	contentType: false,
      	processData: false,
      	success: function(datos){ 
      		console.log(datos);

      		if (datos.extencion==".docx") {
      			
      		}
      		if (datos.extencion==".txt") {
      			var img = "img/txt.png"; 
      		}
      		if (datos.extencion==".pdf") {
      			var img = "img/pdf.jpg"; 
      		}
      		if (datos.extencion==".xlxs") {
      			var img = "img/word.png"; 

      		}	
      		if (datos.extencion==".jpg" || datos.extencion==".png") {
      			var img = "ajax/archivos/"+datos.nombre;
      		}

      		$("#archivos").append(`
      			<div class="col-md-2 p-2 m-4">
      			<div class="card" style="width: 200px;">
      			<img style="width:200px; height: 178px; " src="${img}" class="card-img-top text-center" alt="...">
      			<div class="card-body"style="padding-top: 0px;"><p class="card-text text-center">${datos.nombre}</p></div>
      			</div> 
      			</div>
      			`); 
      		
      		       



      	}
      });
  });
});
