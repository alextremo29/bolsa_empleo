<?php  
	session_start();

	if ($_SESSION["correo"]=='') {
		header('Location: login.php');
		session_destroy();
	}
?>