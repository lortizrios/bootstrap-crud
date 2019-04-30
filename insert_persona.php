<?php

/*
	Inserta un record en la tabla persona
*/

require_once('connect_db.php');

$nombre = filter_input(INPUT_POST, "nombre");
$apellido_paterno = filter_input(INPUT_POST, "apellido_paterno");
$apellido_materno = filter_input(INPUT_POST, "apellido_materno");
$correo_electronico = filter_input(INPUT_POST, "correo_electronico");

$sql = "insert into persona values(null, ?, ?, ?, ?)" ;

// conectar a la base de datos
$con = conectarDB();

// crear el prepare statement
$stmt = mysqli_prepare($con, $sql);

// bind de los valores enviados con los marcadores
mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellido_paterno, $apellido_materno, $correo_electronico);

// ejecutar el insert 
if (mysqli_stmt_execute($stmt)) {
    $ultimo_id = mysqli_insert_id($con);
    // echo "Nueva persona insertada.<br>";
    // echo "Nuevo id creado: " . $ultimo_id;
    header('Location: index.php');
} else {
    echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
}

/* cerrar statement */
mysqli_stmt_close($stmt);

// cerrar la conexion
mysqli_close($con);



?>