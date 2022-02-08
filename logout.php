<?php
	//session_start();    // unirse a la sesión
						//comprobar si existe la variable usuario????
	require_once 'sesiones.php';	
	comprobar_sesion();
	$_SESSION = array();
	session_destroy();	// eliminar la sesion
	setcookie(session_name(), 123, time() - 1000); // eliminar la cookie
?>


<div class="container text-center"> 
	<h4 class='h3 m-5 fw-normal'>Rellenar sesión de forma correcta.</h4>

		<a href = "login.php">&larr; Volver a la página de LOGIN</a>
	


