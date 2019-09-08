<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Biznagas</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- NOTE  AQUI PONDREMOS TODOS LOS CSS QUE UTILIZAREMOS EN TODAS LAS PAGINAS -->
    
        <!-- SECTION CSS NECESARIOS PARA LA PLANTILLA -->
        
        <link href="vistas/modulos/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="vistas/modulos/css/login_overlay.css" rel='stylesheet' type='text/css' />
        <link href="vistas/modulos/css/style6.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="vistas/modulos/css/shop.css" type="text/css" />
        <link rel="stylesheet" href="vistas/modulos/css/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="vistas/modulos/css/owl.theme.css" type="text/css" media="all">
        <link href="vistas/modulos/css/style.css" rel='stylesheet' type='text/css' />
        <link href="vistas/modulos/css/fontawesome-all.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
            rel="stylesheet">
        <link href="vistas/modulos/css/simplyCountdown.css" rel='stylesheet' type='text/css' />


    <!-- NOTE  AQUI PONDREMOS TODOS LOS JS REMOTOS NECESARIOS -->

        <!-- SECTION JS NECESARIOS PARA LA PLANTILLA -->

        <script src="vistas/modulos/js/move-top.js"></script>
        <script src="vistas/modulos/js/easing.js"></script>
        <script src="vistas/modulos/js/owl.carousel.js"></script>
        <script src="vistas/modulos/js/simplyCountdown.js"></script>
        <!-- // modal -->

        <!--search jQuery-->
        <script src="vistas/modulos/js/modernizr-2.6.2.min.js"></script>
        <script src="vistas/modulos/js/classie-search.js"></script>
        <script src="vistas/modulos/js/demo1-search.js"></script>
        <!--//search jQuery-->
        <!-- cart-js -->
        <script src="vistas/modulos/js/minicart.js"></script>
	


</head>

<body>

<?php
/* REVIEW  COMENZAMOS CON LA MAQUETACION */

 // NOTE   ---------------  HEADER  -------------------

 include "modulos/Mainheader.php";
 


// NOTE CONTENIDO TEMPORAL     
/* -------------------------------------------------------- */


            if(isset($_GET["ruta"])){

              if($_GET["ruta"] == "inicio"){

                include "modulos/baner.php";
                include "modulos/".$_GET["inicio"].".php";

              }else {
                  # Error 404...
                  include "modulos/404.php";
              }
            }









// NOTE FOOTER      

/* include "modulos/footer.php"; */

/* echo '</div>'; */

?>













    <!-- NOTE  AQUI PONDREMOS TODOS LOS JS INTERNOS QUE LLAMAREMOS -->
    <script src="vistas/js/plantilla.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>