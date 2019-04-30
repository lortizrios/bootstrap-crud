<!DOCTYPE html>

<html>

    <head>
        <title>Insertar Persona</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>

    <body>

        <div class="container">
            <?php
            include('navbar.php');
            ?>

            <h1 class="display-4">A&ntilde;adir Persona</h1>

            <div>
                <a href="index.php" class="btn btn-primary btn-lg active">Inicio</a>
            </div>

            <form action="insert_persona.php" method="POST">

                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input type="text" name="apellido_paterno" class="form-control"/>
                </div>

                <div class="form-group">
                <label>Apellido Materno:</label>
                <input type="text" name="apellido_materno" class="form-control" />
                </div>

                <div class="form-group">
                <label>Correo Electr&oacute;nico:</label>
                <input type="text" name="correo_electronico" class="form-control" />
                </div>

                <!-- <button type="submit">Grabar</button> -->

                <input type="submit" value="Grabar" class="btn btn-primary btn-lg"/>
            </form>

        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>