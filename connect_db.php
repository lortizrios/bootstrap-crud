<?php

/* 
	Funcion para conectar a la base de datos.
*/
function conectarDB(){

	// host, user, password, base de datos
	$con = mysqli_connect('localhost', 'root', 'root', 'persona') ;

	// verificar la conexion
	if (!$con) {
		die("ERROR CONEXION: " . mysqli_connect_errno() . ' ' . mysqli_connect_error());
	}

	return $con;
}


/*
	mysqli_connect()
	mysqli_connect_errno()
	mysqli_connect_error()
	die()
*/

?>