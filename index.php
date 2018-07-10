<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="modulos/menu_top/css/header.css">
  <link rel="stylesheet" href="modulos/footer/css/footer.css">
  <link rel="stylesheet" href="css/master.css">

</head>

<body>
  <!-- HEADER -->
  <?php include "modulos/menu_top/menu_top.php"; ?>

  <!-- Contenido principal -->
  <section class="container-fluid">
    <div class="row">
      <form action="vista1.html" class="form-inline col-centrada">
        <div class="col-12 img"></div>
        <div class="row form-group col-9 mx-sm-3 mb-2">
          <input type="text" class="col-6 col-sm-6 col-md-6 form-control" id="localidad" placeholder="Ej: Malaga">
          <input type="text" class="col-6 col-sm-6 col-md-6 form-control" id="trabajo" placeholder="Ej: Carrefour">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>
    </div>
  </section>

  <!--FOOTER-->
  <?php include "modulos/footer/footer.php"; ?>

  <!-- Modal registro-->
  <?php include "modales/modal_registro.php"; ?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/index.js"></script>
</body>

</html>
