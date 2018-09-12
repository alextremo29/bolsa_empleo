<?php
	require_once '../models/model_usuario.php';
	session_start();
	switch ($_POST["metodo"]) {
		case 'inicia_sesion':
			iniciar_sesion($_POST["correo"], $_POST["password"]);
			break;
		case 'registrar_usuario':
			registrar_usuario($_POST["identificacion"],$_POST["nombre"],$_POST["apellidos"],$_POST["correo"], $_POST["password"]);
			break;
		
		default:
			"Proximamente..... :3";
			break;
	}
	function iniciar_sesion($correo,$password)
	{
		$respuesta = array();
		$usuario = new Usuario();
		$existe_usuario = $usuario->consultar_usuario($correo,$password);
		if (!empty($existe_usuario)) {
			$_SESSION["codigo_ciudad"] = $existe_usuario["codigo_ciudad"];
			$_SESSION["codigo_depa"] = $existe_usuario["codigo_depa"];
			$_SESSION["correo"] = $existe_usuario["correo"];
			$_SESSION["direccion_persona"] = $existe_usuario["direccion_persona"];
			$_SESSION["estado_civil"] = $existe_usuario["estado_civil"];
			$_SESSION["fecha_nacimiento"] = $existe_usuario["fecha_nacimiento"];
			$_SESSION["foto"] = $existe_usuario["foto"];
			$_SESSION["genero"] = $existe_usuario["genero"];
			$_SESSION["identificacion"] = $existe_usuario["identificacion"];
			$_SESSION["nombre_pers"] = $existe_usuario["nombre_pers"];
			$_SESSION["password"] = $existe_usuario["password"];
			$_SESSION["rol"] = $existe_usuario["rol"];
			$_SESSION["telefono"] = $existe_usuario["telefono"];
			$_SESSION["tipo_doc"] = $existe_usuario["tipo_doc"];
			$respuesta["valor"]= 1;
			$respuesta["rol"] = $_SESSION["rol"];

		} else{
			$respuesta["valor"]= 0;
		}
		echo json_encode($respuesta);
	}
	function registrar_usuario($identificacion,$nombre,$apellidos,$correo,$password)
	{
		//echo "Nombre: ".$nombre." Apellidos: ".$apellidos." Correo: ".$correo." Passowrd: ".$password." Identificacion: ".$identificacion;
		$respuesta= array();
		$usuario = new Usuario();
		$existe_usuario = $usuario->consultar_usuario($correo);
		if (empty($existe_usuario)) {
			$usuario_nuevo = $usuario->registrar_usuario($identificacion,$nombre,$apellidos,$correo,$password);
			$respuesta["usuario_nuevo"]=$usuario_nuevo;
			if ($usuario_nuevo) {
				$respuesta["valor"]=1; 
			} else{
				$respuesta["valor"]=0; 
			}
		} else{
			$respuesta["valor"]=2; 
		}
		echo json_encode($respuesta);

	}
?>