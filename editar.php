
<!doctype html>

<html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>

    <body>

        <a href="index.php">Inicio</a>

        <form action="update_persona.php" method="POST">
            <div class="container">
                <?php
                include('navbar.php');
                require_once('editarsql.php');
                ?>

                <h1 class="display-4">Editar Persona</h1>
                
                <div class="form-group">
                    <label>ID:</label>
                    <input type="text" name="print-id" value="<?php echo $id; ?>" class="form-control" disabled/>
                </div>

                <!--Adicional-->
                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?> " class="form-control" />
                </div>

                <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input type="text" name="apellido_paterno" value="<?php echo $apellidoP; ?> " class="form-control"/>
                </div>

                <div class="form-group">
                <label>Apellido Materno:</label>
                <input type="text" name="apellido_materno" value="<?php echo $apellidoM; ?> " class="form-control" />
                </div>

                <div class="form-group">
                <label>Correo Electr&oacute;nico:</label>
                <input type="text" name="correo_electronico" value="<?php echo $email; ?>" class="form-control" />
                </div>

                <input type="submit"  name="submit" value="<?php echo "Actualizar a ".$nombre." ".$apellidoP." ".$apellidoM; ?>" class="btn btn-primary btn-lg"/>

            </div>
            
        </form>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
