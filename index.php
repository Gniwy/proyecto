<?php include('conexion/conexion.php'); ?>
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

</head>

<body>
  <!-- HEADER -->
  <?php include "modulos/menu_top/menu_top.php"; ?>

  <!-- Contenido principal -->
  <section class="container-fluid">
    <div class="row">
      <form action="buscador.php" method="post" class="form-inline col-centrada">
        <div class="col-12 img"></div>
        <div class="row form-group col-9 mx-sm-3 mb-2">
          <select class="col-4 col-sm-4 col-md-4 form-control" name="comunidad">
            <option value="1">Todas las comunidades</option>
            <?php
            // barra selectora de la comunidades
              $consulta = "SELECT * FROM `comunidades` WHERE 1";
              $sql = mysqli_query($link,$consulta);

              while ($row = mysqli_fetch_assoc($sql))
              {
                echo '<option value="'.$row['id'].'">'.$row['comunidad'].'</option>';
              }
             ?>
          </select>
          <select class="col-4 col-sm-4 col-md-4 form-control" name="provincia">
            <option value="1">Todas las provincias</option>
            <?php
            // barra selectora de la provincias
              $consulta = "SELECT * FROM `provincias` WHERE 1";
              $sql = mysqli_query($link,$consulta);

              while ($row = mysqli_fetch_assoc($sql))
              {
                echo '<option value="'.$row['comunidad_id'].'">'.$row['provincia'].'</option>';
              }
             ?>
          </select>
          <select class="col-4 col-sm-4 col-md-4 form-control" name="localidad">
            <option value="1">Todas las localidades</option>
            <?php
            // barra selectora de la localidades
              $consulta = "SELECT * FROM `localidad` WHERE 1";
              $sql = mysqli_query($link,$consulta);

              while ($row = mysqli_fetch_assoc($sql))
              {
                echo '<option value="'.$row['cp'].'">'.$row['nombre'].'</option>';
              }
             ?>
          </select>
          <input type="text" class="col-12 form-control" name="trabajo" id="trabajo" placeholder="Ej: Carrefour">
        </div>
        <input type="submit" name="enviar" value="Buscar" class="btn btn-primary mb-2">
      </form>
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

</body>

</html>
