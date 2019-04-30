<?php

// incluye el script php
require_once('connect_db.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellido_paterno'];
$apellidoM = $_POST['apellido_materno'];
$email = $_POST['correo_electronico'];

$sql = "UPDATE persona SET nombre = ?, apellido_paterno = ?, 
apellido_materno = ?, email = ? WHERE id = ?" ; 

// conectar a la base de datos
$con = conectarDB();

// crear el prepare statement
$stmt = mysqli_prepare($con, $sql);

// bind de los valores enviados con los marcadores
mysqli_stmt_bind_param($stmt, "ssssi", $nombre, $apellidoP, $apellidoM, $email, $id);

if(isset ($_POST['submit'])){
    echo "Entro al if_Post Submit ="." ".$sql;
    
    //ejecutar el update 
    if (mysqli_stmt_execute($stmt)) {
        echo "Entro al segundo if (mysqli_stmt_execute(stmt)) ";
        //var_dump($sql);
        var_dump($id);
        echo "ID = "." ". $id;
        echo "SQL = "." ".$sql;
        $_SESSION ['msg'] = "Guardado";
        echo "Entro al primer else y no entro a post";
        $_SESSION ['alert'] = "Warning"; 
        header('Location: index.php');
    } else {
        echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
        echo "Entro al segundo if pero paso al else";
        
    }
}else{
    $_SESSION ['msg'] = "No entro al if post submit ";
    echo "Entro al primer else y no entro a post";
    $_SESSION ['alert'] = "Warning"; 
}
/* cerrar statement */
mysqli_stmt_close($stmt);

// cerrar la conexion
mysqli_close($con);

/* free result set */
$stmt->free();

?>