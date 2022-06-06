<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap-Local -->
    <link rel="stylesheet" href="Vistas/Css/bootstrap.min.css">
    <script src="Vistas/Js/jquery-3.6.0.min.js"></script>
    <script src="Vistas/Js/popper.min.js"></script>
    <script src="Vistas/Js/bootstrap.min.js"></script>
    <title>Bootstrap 5 Local</title>
  </head>
  <body>
    <?php require_once("Vistas/Modulos/NavSup.php"); ?>
    <!--<section><h1 class="text-center">estas enviando :<?php #$epc=new MvcControlador; $epc->enalcesPaginasControlador();  ?></h1></section>-->
    <div class="container-responsive">
      <?php $epc=new MvcControlador; $epc->enalcesPaginasControlador();  ?>
    </div><br><br>
    <footer><?php require_once("Vistas/Modulos/NavInf.php") ?></footer>
  </body>
</html>