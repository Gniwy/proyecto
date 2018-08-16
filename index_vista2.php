<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista2</title>
    <?php include"../include_css_basic.php"; ?>
    <!-- <link rel="stylesheet" href="../..modulos/menu_top/css/menu-top.css"> -->
    <!-- <link rel="stylesheet" href="../../modulos/buscador_avanzado/css/buscador_avanzado.css"> -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section>
      <?php include"../menu_top/menu_top.php" ?>
    </section>
    <section class="container mt-5">
      <div class="col col-sm-12 col-md-12" id="fondoBuscador">
        <?php include"../buscador_avanzado/buscador_avanzado.php" ?>
      </div>
    </section>
    <section class="container" id="contenido_vista2" style="border: 1px solid blue;">
      <!-- contenido del filtro de busqueda -->
      <div class="row">
        <div class="col-sm-2 col-md-2 d-none d-sm-inline" id="filtro_vista2" style="border: 1px solid;">

            <?php include "../filtro/filtro.php"; ?>
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

        <!-- contenido de la busqueda -->
        <div class="col-12 col-sm-9 col-md-9" id="busqueda_vista2" style="border: 1px solid red;">
          <!-- primera fila de la busqueda -->
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
          <!-- segunda fila de la busqueda -->
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
          <!-- tercera fila de la busqueda -->
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
          <!-- paginacion -->
          <div class="row mt-5 mb-3">
              <div class="col" style="border: 1px solid;">
                  paginacion
              </div>
          </div>
        </div>
      </div>


    </section>
    <footer>
      <?php include"../footer/footer.php"; ?>
      <?php include"../include_js_basic.php"; ?>
    </footer>
  </body>
</html>
