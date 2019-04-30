<?php

    //Codigo elaborado por Leroy Ortiz Rios

    // incluye el script php 
    require_once('connect_db.php');

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        // conectar a la base de datos
        $con = conectarDB();

        $sql = "SELECT * FROM persona WHERE id = '$id'";

        //adicional
        if ( $stmt = mysqli_prepare($con, $sql) ) {

            // ejecutar el query
            mysqli_stmt_execute($stmt);

            //Guarda los resultados ejecutados
            $result = mysqli_stmt_get_result($stmt);

            while ( $row = mysqli_fetch_assoc($result) ){

                $nombre = $row['nombre'];
                $apellidoP = $row['apellido_paterno'];
                $apellidoM = $row['apellido_materno'];
                $email = $row['email'];
                
            }    
            
        }else {
            echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
        }
        
    }

    /* cierra conexion */
    mysqli_close($con);
    
    /* cerrar statement */
    mysqli_stmt_close($stmt);
   
    /* free result set */
    $result->free();

?> 