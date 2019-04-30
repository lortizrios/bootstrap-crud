<!doctype html>

<html>

    <head>
        <title>Listado de Personas</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" >
    </head>

    <body>

 

        <div class="container">

            <?php
            include('navbar.php');
            ?>
            
            <h1 class="display-4">Listado de Personas</h1>

            <div>
                <a class="btn btn-primary btn-lg" href="add_persona.php">A&ntilde;adir Persona</a>
            </div>

            <div class="table-responsive">
            <?php
                include("select_all.php");
            ?>
            </div>

        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>