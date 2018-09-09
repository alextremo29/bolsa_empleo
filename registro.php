<?php 
if (isset($_POST['sumbit'])) {
	$conexion = mysql_connect("localhost", "root","database"); 
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$id = $_POST["cedula"];
	$email = $_POST['email'];
	$contraseña = $_POST['contraseña'];
	$rcontraseña = $_POST['rcontraseña'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$nombre = "/^[A-Z][a-zA-Z ]+$/";
	$emailValidacion = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$numero = "/^[0-9]+$/";
	if(empty($nombre) || empty($apellido) || empty($email) || empty($id) || empty($contraseña) || empty($rcontraseña) ||
		empty($telefono) || empty($direccion)){
			
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Por favor llena todos los espacios
	..!</b>
				</div>
			";
			exit();
		} else {

		if(!preg_match($emailValidacion,$email)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b> $email 'no es válido..!'</b>
				</div>
			";
			exit();
		}
		if(strlen($contraseña) < 9 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>La contraseña es débil</b>
				</div>
			";
			exit();
		}
		if(strlen($rcontraseña) < 9 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>La contraseña es débil</b>
				</div>
			";
			exit();
		}
		if($contraseña != $rcontraseña){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>la contraseña no coincide</b>
				</div>
			";
		}
		if(!preg_match($numero,$telefono)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>El número $telefono no es lo mismo</b>
				</div>
			";
			exit();
		}
		if(!(strlen($telefono) == 10)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>El número de móvil debe ser de 10 dígitost</b>
				</div>
			";
			exit();
		}
		
		//email ya registrado
		$sql = "SELECT id FROM info WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($con,$sql);
		$count_email = mysqli_num_rows($check_query);
		if($count_email > 0){
			echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>La dirección de correo electrónico ya está en uso. Pruebe otra dirección de correo electrónico.
	</b>
				</div>
			";
			exit();
		} else {
			$contraseña = md5($contraseña);

	$sql = "INSERT INTO info(`nombre`, `apellido`,`id`, `email`, 
			`contraseña`, `telefono`, `direccion`) 
			VALUES ('$nombre', '$apellido', '$id', '$email', 
			'$contraseña', '$telefono', '$direccion')";
			$run_query = mysqli_query($con,$sql);
			if($run_query){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Usted está registrado con éxito..!</b>
					</div>
				";
			}
		}
		}
}




?>
  
<!doctype html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Registro</title>
    <link rel='stylesheet' href="style.css">
</head>

<body>

		<input type="text" name="nombre" placeholder="Tu nombre *" required=""><br>

	
</body>
</html>
