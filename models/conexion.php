<?php  
	class Conectar
	{
	//establecemos la conexión con la base de datos
	    public static function con()
	    {
	        $conexion = mysqli_connect('localhost', 'u217224818_bolsa', 'ALEX.bolsa2018');
	        // //mysqli_query("SET NAMES 'utf8'");
	        mysqli_select_db($conexion,"u217224818_bolsa");
	        return $conexion;
	        //return "holas";
	        
	    }
	}
?>