$("#btn-crear").click(function () {
	// body...
	alert("Funciona");
});

$("#btn-sg").click(function () {
	// body...
	//alert("Funciona");
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var correo = $("#correo").val();
	var contra1 = $("#contra1").val();
	var contra2 = $("#contra2").val();

	 if($("#contra1").val()=="" && $("#contra2").val()==""){
	 	alert(" contraseñas distintas");
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
				location.href ="googledrive.php";
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
				$("#res").html(`<div class="alert alert-danger" role="alert">
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



$("#btn-agregarCarpeta").click(function () {

	var parametros = "nombreCarpeta="+$("#nombreC").val()+"&carpeta="+$("#txt-carpeta-actual").val()+"&usuario="+$("#usuario").val();

	$.ajax({
		url:'ajax/carpeta.php?accion=agregar',
		method:'POST',
		data:parametros,
		dataType:'json',
		success:function(res){
			console.log(res);

			if(res.status == 1){
				
				$("#capetas").append(
					`<div class="col-md-3">
                        <a href="googledrive.php?carpetaActual=${ $("#txt-carpeta-actual").val()  }">
                            <p>
                              <i style="font-size: 40px; padding-right: 10px; color: gray;" class="fas fa-folder folder "></i>
                                 ${ $("#nombreC").val()  }
                            </p>
                        </a>
                    </div>`

					);

			}
		}
	});
});