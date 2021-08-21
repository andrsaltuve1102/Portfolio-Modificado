<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg="inicio";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Inicio</title>
</head>

<body id="inicio">

<?php include_once("header.php"); ?>

    <main class="container">
        
        <div class="row">
            <div class="col-12 mt-4 text-center excavador1">
                <a href="sobre-mi.php"><img src="images/excavador.png" class="excavador"></a>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 text-center">
                <a href="sobre-mi.php" class="btn shadow">Conocé más Acerca de mí</a>
            </div>
        </div>
    </main>

<?php include_once("footer.php"); ?>
    
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=54117361310" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>