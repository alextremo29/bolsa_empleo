<?php
	/**
	 * clase usuario
	 */
	require_once 'conexion.php';
	class Usuario
	{
		
		public function consultar_usuario($correo,$password='')
		{
			if ($password=='') {
				$cadena_pass = "";
			} else{
				$cadena_pass= " and password='$password'";
			}

			$sql_persona = "select *  from persona where correo = '$correo' $cadena_pass";
			$query_persona = mysqli_query(Conectar::con(),$sql_persona);
			$array_persona = mysqli_fetch_array($query_persona);
			return $array_persona;
			

		}
		public function registrar_usuario($nombre,$apellidos,$correo,$password)
		{
			//$sql_persona="holas";
			$sql_persona = "insert into persona (nombre_pers,correo,password,rol) value ('$nombre $apellidos', '$correo', '$password',1)";
			$query_persona = mysqli_query(Conectar::con(),$sql_persona);
			return $query_persona;
		}
		
	}
?>