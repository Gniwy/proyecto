<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista2</title>
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
    <section>
      <?php include"modulos/menu_top/menu_top.php" ?>
    </section>
    <section class="container mt-5">
      <div class="col col-sm-12 col-md-12" id="fondoBuscador">
        <?php include"modulos/buscador_avanzado/buscador_avanzado.php" ?>
      </div>
    </section>
    <section class="container" id="contenido_vista2" style="border: 1px solid blue;">
      <!-- contenido del filtro de busqueda -->
      <div class="row">
        <div class="col-sm-2 col-md-2 d-none d-sm-inline" id="filtro_vista2" style="border: 1px solid;">

            <?php include "modulos/filtro/filtro.php"; ?>
        </div>

        <!-- contenido del filtro en xs -->
        <button class="col-3 d-inline d-sm-none" type="button" name="button" data-toggle="modal" data-target="#exampleModal">
          filtro
        </button>
        <!-- modal filtro xs -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- fin del contendido del filtro en xs -->

        <!-- modal crear empresa -->

        <?php include "modales/modal_crear_empresa.php"; ?>

        <!-- contenido de la busqueda -->
        <div class="col-12 col-sm-9 col-md-9" id="busqueda_vista2" style="border: 1px solid red;">

          <?php include "modulos/lista_empresas/lista_empresas.php";?>


          <!-- primera fila de la busqueda -->
          <!--
          <div class="row mt-4">
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              1
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              2
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              3
            </div>
          </div>
          <!-- segunda fila de la busqueda --
          <div class="row mt-2">
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              4
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              5
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              6
            </div>
          </div>
          <!-- tercera fila de la busqueda --
          <div class="row mt-2">
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              7
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              8
            </div>
            <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
              9
            </div>
          </div>
        -->


          <!-- paginacion --
          <div class="row mt-5 mb-3">
              <div class="col" style="border: 1px solid;">
                  paginacion
              </div>
          </div>
          -->
        </div>
      </div>


    </section>
    <footer>
    </footer>
  
    <script type="text/javascript">
    var map = L.map('mapVista').setView([41.66, -4.72], 15);


    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18}).addTo(map);

    </script>
  </body>
</html>
