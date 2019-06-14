<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php

  error_reporting(0);

  include_once "../conexion/conexion.php";

  session_start();

  if($_SESSION['id_usuario']!=null){
    $id_usuario=$_SESSION['id_usuario'];

    $sql_tipo_usuario='SELECT * FROM usuario WHERE id_cliente='.$id_usuario;
    $aux_tipo_usuario=mysqli_query($link,$sql_tipo_usuario);
    $ex_tipo_usuario=mysqli_fetch_assoc($aux_tipo_usuario);
    $tipo_usuario=$ex_tipo_usuario['tipo_usuario'];
  }
  ?>

  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../image/ico_logo.ico" />
    <title>Administracion</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="css/index.css">
  </head>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../js/jquery.js"></script>

  <!-- jQuery 12.1.1 necessary jqueryUI -->
  <script src="../js/jquery-ui.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>


  <body>

    <?php
    if((!isset($_SESSION['id_usuario']) || $tipo_usuario==1)){
      include ("login.php");
    }else{
      include ("principal.php");
    }?>

  </body>

  <script type="text/javascript" src="js/index.js"></script>

</html>
