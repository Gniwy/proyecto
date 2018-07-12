<?php

include ('conexion/conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="modulos/menu_top/css/header.css">
  <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">

</head>

<body>
  <!-- HEADER -->
  <?php include "modulos/menu_top/menu_top.php"; ?>

  <!-- Contenido principal -->
  <section class="container-fluid">
    <div class="row">
      <!-- <?php //include "modulos/buscador_principal/buscador_principal.php";?> -->
    </div>
  </section>
  <!--FOOTER-->
  <?php include "modulos/footer/footer.php"; ?>

  <!-- Modal registro-->
  <div id="div_modal_registro"><?php include "modales/modal_registro.php"; ?></div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/index.js"></script>

  <script type="text/javascript" src="modulos/menu_top/js/menu_top.js"></script>

  <!-- <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script> -->

</body>

</html>
