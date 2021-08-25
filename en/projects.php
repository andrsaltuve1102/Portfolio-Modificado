<?php

$pg="proyectos";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">

<?php include_once("header-en.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>

        <div class="row bloque">
            <div class="col-sm-4 col-12">
                <div class="row border m-1 bg-white">
                    <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">

                    <div class="col-12 color-gradiente py-2">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="col-6 my-5">
                        <a href="" class="btn btn-cv">Ver online</a>
                    </div>
                    <div class="col-6 my-5">
                        <a href="https://github.com">Código fuente</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-12">
                <div class="row border m-1 bg-white">
                    <img src="images/abmventas.png" alt="ABM CLIENTES" class="img-fluid">

                    <div class="col-12 color-gradiente py-2">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="col-6 my-5">
                        <a href="" class="btn btn-cv">Ver online</a>
                    </div>
                    <div class="col-6 my-5">
                        <a href="https://github.com">Código fuente</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-12">
                <div class="row border m-1 bg-white">
                    <img src="images/proyecto-integrador.png" alt="ABM CLIENTES" class="img-fluid">

                    <div class="col-12 color-gradiente py-2">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="col-6 my-5">
                        <a href="" class="btn btn-cv">Ver online</a>
                    </div>
                    <div class="col-6 my-5">
                        <a href="https://github.com">Código fuente</a>
                    </div>
                </div>
            </div>
        </div>

       
    </main>

    <?php include_once("footer.php"); ?>
    
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541173613310" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script></body>

</html>