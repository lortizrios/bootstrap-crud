<?php

/*
	Presenta todos los records de la tabla personas
*/

// incluye el script php 
require_once('connect_db.php');

$sql = "select * from persona" ; 

$con = conectarDB();

// crear el prepare statement
if ( $stmt = mysqli_prepare($con, $sql) ) {

        // ejecutar el query
        mysqli_stmt_execute($stmt);
        
        
        $result = mysqli_stmt_get_result($stmt);
        
        // obtener los resultados
        echo "<table class='table table-hover'>";
        ?>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo Electronico</th>
                <th>Editar</th>
                <th>Eliminar</th>
                
            </tr>
        </thead>

        <tbody>
        <?php

        while ( $row = mysqli_fetch_assoc($result) ){

            echo "<tr>\n";
                echo "<td>" . $row['id'] . "</td>\n";
                echo "<td>" . $row['nombre'] . "</td>\n";
                echo "<td>" . $row['apellido_paterno'] . "</td>\n";
                echo "<td>" . $row['apellido_materno'] . "</td>\n";
                echo "<td>" . $row['email'] . "</td>\n";
                echo "<td><a href='editar.php?id=" . $row['id'] . "'>Editar</a></td>\n";
                echo "<td><a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a></td>\n";
            echo "</tr>\n";
            
        }
        
        echo "</tbody>\n";
        echo "</table>\n";

	// liberar memoria
	mysqli_stmt_close($stmt);

} else {
	echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
}

// cerrar la conexion
mysqli_close($con);





?>