<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
$lugarp = 0;
$empresa = 0;
$lc = 0;

//sacamos los valores
foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="image/ico_logo.ico" />
    <title>IReferences</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="modulos/menu_top/css/menu-top.css">
    <link rel="stylesheet" href="modulos/footer/css/footer.css">
    <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="modulos/filtro/css/style.css">
    <link rel="stylesheet" href="css/style_vista2.css">

    <script src="js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/index.js"></script>

    <script type="text/javascript" src="modulos/menu_top/js/menu_top.js"></script>

    <!-- jQuery autocomplete (accion select_lugar) -->
    <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
  </head>
  <body>

    <!--hidden busqueda-->
    <input type="hidden" id="hidden_provincia" name="" value="<?php echo $lugarp;?>">
    <input type="hidden" id="hidden_empresa" name="" value="<?php echo $empresa;?>">
    <input type="hidden" id="hidden_lc" name="" value="<?php echo $lc;?>">

    <section>
      <?php include"modulos/menu_top/menu_top.php" ?>
    </section>
    <section class="container mt-5">
      <div class="col col-sm-12 col-md-12" id="fondoBuscador">
        <?php include"modulos/buscador_avanzado/buscador_avanzado.php" ?>
      </div>
    </section>
    <section class="" id="contenido_vista2">

        <!-- contenido de la busqueda -->
        <div class="col-10 col-sm-9 col-md-10 mb-3" id="busqueda_vista2">

          <?php //include "modulos/lista_empresas/lista_empresas.php";?>

        </div>
      </div>


    </section>
    <footer>
      <?php include "modulos/footer/footer.php"; ?>
    </footer>

    <script type="text/javascript">

      $('#busqueda_vista2').load('modulos/lista_empresas/lista_empresas.php?lugarp='+$('#hidden_provincia').val()+'&empresa='+$('#hidden_empresa').val()+'&lc='+$('#hidden_lc').val());

    </script>
  </body>
</html>
