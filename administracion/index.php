<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php

  session_start();

  ?>

  <head>
    <meta charset="utf-8">
    <title></title>

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
    if(!isset($_SESSION['id_usuario'])){
      include ("login.php");
    }else{
      include ("principal.php");
    }?>

  </body>

  <script type="text/javascript" src="js/index.js"></script>

</html>
