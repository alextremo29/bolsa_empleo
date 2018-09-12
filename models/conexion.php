<?php  
	class Conectar
	{
	//establecemos la conexión con la base de datos
	    public static function con()
	    {
	        //$conexion = mysqli_connect('localhost', 'u217224818_bolsa', 'ALEX.bolsa2018');
	        $conexion = mysqli_connect('localhost', 'alex', 'alex.159875321');
	        // //mysqli_query("SET NAMES 'utf8'");
	        mysqli_select_db($conexion,"bolsa_empleo");
	        return $conexion;
	        //return "holas";
	        
	    }
	}
?>