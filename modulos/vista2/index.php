<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista2</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
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
    <section class="contanier" id="contenido_vista2">
      <div class="row col col-sm-2 col-md-2" id="filtro_vista2">

          filtro <br>
          filtro <br>
          filtro <br>
          filtro <br>

        <div class="container col col-sm-10 col-md-10" id="busqueda_vista2">
          <div class="row">

            <div class="col col-sm-3 col-md-3 item">
              1
            </div>
            <div class="col col-sm-3 col-md-3 item">
              2
            </div>
            <div class="col col-sm-3 col-md-3 item">
              3
            </div>
          </div>

          <div class="row">

            <div class="col col-sm-3 col-md-3 item">
              4
            </div>
            <div class="col col-sm-3 col-md-3 item">
              5
            </div>
            <div class="col col-sm-3 col-md-3 item">
              6
            </div>

          </div>

          <div class="row">

            <div class="col col-sm-3 col-md-3 item">
              7
            </div>
            <div class="col col-sm-3 col-md-3 item">
              8
            </div>
            <div class="col col-sm-3 col-md-3 item">
              9
            </div>

          </div>

        </div>
      </div>
    </section>
    <footer>
      <?php include"../footer/footer.php" ?>
    </footer>
  </body>
</html>
