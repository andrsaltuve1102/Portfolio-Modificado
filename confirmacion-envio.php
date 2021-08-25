<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pg="contacto";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>


<body id="contacto2">

<?php include_once("header.php"); ?>

    <main>
        <main class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1>Gracias por contactarte,</h1>
                </div>

                <p>te estaré respondiendo a la brevedad</p>

                
        </main>
        
        <div class="footer.envio">
        <?php include_once("footer.php"); ?>
        </div>
        
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541173613310" target="_blank"
                title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>