<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include 'librerias.php'; 
		//error_reporting(E_ALL);
		//ini_set('display_errors', 1);
	?>
	<meta charset="UTF-8">
	<title>Inicio</title>
</head>
<body id="LoginForm">
	<div class="container">
		<h1 class="form-heading">Inicio de sesión</h1>
		<div class="login-form">
			<div class="main-div">
				<div class="panel">
					<h2>Credenciales de acceso</h2>
					<p>Por favor ingrese su correo y contraseña</p>
				</div>
				<div id="respuesta_login">
					
				</div>
				<form id="Login" name="Login">

					<div class="form-group">


						<input type="email" class="form-control" id="inputEmail" placeholder="Correo">

					</div>

					<div class="form-group">

						<input type="password" class="form-control" id="inputPassword" placeholder="Constraseña">

					</div>
					<div class="forgot">
						<a href="#">Olvido su contraseña?</a>
					</div>

				</form>
				<div class="row">
					<div class="col-md-6">
						<button onclick="inicia_sesion();" class="btn btn-primary">Iniciar sesión</button>
					</div>
					<div class="col-md-6">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_registro">Registrate</button>
					</div>
				</div>
			</div>
			<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Registro" aria-hidden="true" id="modal_registro">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <hr class="line-encabezado" style="border-top: 10px solid #f0ad4e;">
			      <div class="modal-header">
			        <h5 class="modal-title titulo_encabezado">Registro</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
				<form id="registro" name="registro">
				      <div class="modal-body">
				      		<div id="respuesta_registro"></div>
							<br>
					      		<div class="row">
					      			<div class="col-md-6">
					      				<input type="text" onkeyup="solo_letras(this.id,'btn_registtrar')" class="form-control" name="txt_nombre" id="txt_nombre" placeholder="Nombres*">
					      			</div>
					      			<div class="col-md-6">
					      				<input type="text" onkeyup="solo_letras(this.id,'btn_registtrar')" class="form-control" name="txt_apellidos" id="txt_apellidos" placeholder="Apellidos*">
					      			</div>
					      		</div>
					      		<br>
					      		<div class="row">
					      			<div class="col-md-6">
					      				<input type="text" class="form-control" name="txt_email" id="txt_email" placeholder="Email*">
					      			</div>
					      			<div class="col-md-6">
					      				<input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="Constraseña*">
					      			</div>
					      		</div>  
				      </div>
				</form>
			    <div class="modal-footer">
		      		<div class="col-md-2">
		        		<button onclick="registrar_usuario();" disabled="disabled" class="btn btn-primary" name="btn_registtrar" id="btn_registtrar">Registrar</button>
		        	</div>
		      		<div class="col-md-2">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		      		</div>
			    </div>
			    </div>
			  </div>
			</div>

			
		</div>
	</div>
</body>
<footer class="py-3" style="bottom: 0px; background-color: #193338;">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Bambusa.Digital 2018</p>
  </div>
</footer>
<script src="js/funciones_usuario.js"></script>
</html>