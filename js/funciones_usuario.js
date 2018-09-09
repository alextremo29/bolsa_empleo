$(function() {
    
});
function inicia_sesion() {
	$('#respuesta_login').html('<i class="fas fa-spinner fa-spin" style="font-size: 34px;"></i>');
	var formulario_inicio= document.Login;
	if (formulario_inicio.inputEmail.value=="" || formulario_inicio.inputPassword.value=="") {
		$('#respuesta_login').html(
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
				'<strong>Importante:</strong> Por favor complete todos los datos<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span></button></div>');
	}else{
		$.post('controllers/controlador_login.php',{correo:formulario_inicio.inputEmail.value,password:formulario_inicio.inputPassword.value,metodo:'inicia_sesion'}).done(function(resp) {
			resp= jQuery.parseJSON(resp);
			if (resp.valor==1) {
				$('#respuesta_login').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
				'<strong>Importante:</strong> Bienvenido<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span></button></div>');
				if (resp.rol==1) {
					setTimeout(function(){ location.href ="dashboard_usuario.php"; }, 2000);
				}
			}else if (resp.valor==0) {
				$('#respuesta_login').html('<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
				'<strong>Importante:</strong>Usuario o contraseña incorrectos<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span></button></div>');
			}
			console.log(resp);
		}).fail(function(err) {
			console.log(err,'err');
		})
	}
}
function registrar_usuario() {
	$('#respuesta_registro').html('<i class="fas fa-spinner fa-spin" style="font-size: 34px;"></i>');
	var formulario_registro = document.registro;
	if (formulario_registro.txt_nombre.value==""||formulario_registro.txt_apellidos.value==""||formulario_registro.txt_email.value==""||formulario_registro.txt_password.value=="") {
		$('#respuesta_registro').html(
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
				'<strong>Importante:</strong> Por favor complete todos los datos<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span></button></div>');
	}else{
		$.post('controllers/controlador_login.php',
			{
				nombre:formulario_registro.txt_nombre.value,
				apellidos:formulario_registro.txt_apellidos.value,
				correo:formulario_registro.txt_email.value,
				password:formulario_registro.txt_password.value,
				metodo:'registrar_usuario'
			})
		.done(function(resp) {
			resp= jQuery.parseJSON(resp);
			console.log(resp);
			if (resp.valor==1) {
				$('#respuesta_registro').html(
					'<div class="alert alert-success alert-dismissible fade show" role="alert">'+
						'<strong>Importante:</strong> Registro exitoso<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span></button>'+
					'</div>');
					setTimeout(function(){$('#modal_registro').modal('hide')}, 2000);	
			} else if (resp.valor==2) {
				$('#respuesta_registro').html(
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
						'<strong>Importante:</strong> Ya tienes una cuenta con nosotros!<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span></button>'+
					'</div>');	
			} else{
				$('#respuesta_registro').html(
					'<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
						'<strong>Importante:</strong> Ya tienes una cuenta con nosotros!<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
						'<span aria-hidden="true">&times;</span></button>'+
					'</div>');	
			}
		}).fail(function(err) {
			console.log(err,'err');
			$('#respuesta_registro').html(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
				'<strong>Importante:</strong> Error al recibir los datos<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
				'<span aria-hidden="true">&times;</span></button></div>');
		})	
	}
}