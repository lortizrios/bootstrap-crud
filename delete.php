<?php

// incluye el script php 
require_once('connect_db.php');

$id = filter_input(INPUT_GET, "id");


$sql = "delete from persona where id = ?" ; 

// conectar a la base de datos
$con = conectarDB();

// crear el prepare statement
$stmt = mysqli_prepare($con, $sql);

// bind de los valores enviados con los marcadores
mysqli_stmt_bind_param($stmt, "s", $id);

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