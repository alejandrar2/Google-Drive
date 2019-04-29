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

	var parametros = "nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&contra1="+contra1+"&contra2="+contra2;
	//console.log(parametros)

	$.ajax({
		url:"ajax/usuario.php",
		method:"POST",
		data:parametros,
		//dataType:"json",
		success:function(res){
			console.log(res);

			if (res.codigo == 1) {
				location.href ="googledrive.html";
			}



		}
	});
	
	

});

$("#btn-cuestionario").click(function () {
	// body...
	alert("Funciona");
	var correo = $("#correo-inicio").val();
});
