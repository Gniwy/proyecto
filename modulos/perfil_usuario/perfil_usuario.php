<?php include ('../../conexion/conexion.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../modulos/menu_top/css/menu-top.css">
    <link rel="stylesheet" href="../../modulos/footer/css/footer.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_vista2.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="../../js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="../../js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.js"></script>

    <script type="text/javascript" src="../../js/index.js"></script>

    <script type="text/javascript" src="../../modulos/menu_top/js/menu_top.js"></script>

  </head>
  <body>
    <section>
      <?php include"../../modulos/menu_top/menu_top.php" ?>
    </section>



    <div class="body_perfil_user container">

      <section class="row">

        <div class="card">
          <div class="form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNick">Nombre/Nick</label>
                <input type="text" class="form-control" id="newNick" placeholder="<?php echo $_SESSION['nick_usuario']; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="********">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Direccion</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Calle azul 1B">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputSexo">Sexo</label>
                <select id="inputSexo" class="form-control">
                  <option selected>Otro</option>
                  <option>Hombre</option>
                  <option>Mujer</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputCP">CP</label>
                <input type="number" class="form-control" id="inputCP">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aceptarTerminos">
                <label class="form-check-label" for="gridCheck">Aceptar terminos</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" id="nuevosDatos">Enviar</button>
          </div>
          </div>

        </div>

      </section>

    </div>

    <footer>
      <?php include "../../modulos/footer/footer.php"; ?>
    </footer>
    <!-- Modal registro-->
    <div id="div_modal_registro" class="pointer"><?php include "../../modales/modal_registro.php"; ?></div>

    <!-- Modal login-->
    <div id="div_modal_login" class="pointer"><?php include "../../modales/modal_login.php"; ?></div>
    <!-- mapa  -->
    <script type="text/javascript" src="../../leaflet/leaflet.js"></script>
    <script type="text/javascript" src="../../leaflet/plugins/Search.js"></script>
    <script type="text/javascript" src="../../leaflet/plugins/L.Control.Locate.js"></script>

    <!-- script pagina -->
    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
