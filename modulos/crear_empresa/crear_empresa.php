
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../image/ico_logo.ico" />
    <title>Crear Empresa</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../modulos/menu_top/css/menu-top.css">
    <link rel="stylesheet" href="../../modulos/footer/css/footer.css">
    <link rel="stylesheet" href="../../modulos/buscador_principal/css/buscador_principal.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../../modulos/filtro/css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_vista2.css">
    <!-- mapa -->
    <link rel="stylesheet" href="../../leaflet/leaflet.css">
    <!-- <link rel="stylesheet" href="../../leaflet/plugins/L.Control.MousePosition.css"> -->

    <link rel="stylesheet" href="css/style.css">

    <script src="../../js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="../../js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.js"></script>

    <script type="text/javascript" src="../../js/index.js"></script>

    <script type="text/javascript" src="../../modulos/menu_top/js/menu_top.js"></script>

    <!-- jQuery autocomplete (accion select_lugar) -->
    <script type="text/javascript" src="../../modulos/buscador_principal/js/buscador_principal.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  </head>
  <body>
    <section>
      <?php include"../../modulos/menu_top/menu_top.php" ?>
    </section>

    <div class="cuerpo col-12 col-sm-8 mx-auto">

      <section class="cabezaIcons">

        <h1>Como crear tu empresa</h1>

        <table class="table-borderless">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">1. Pon sus datos</th>
              <th scope="col"></th>
              <th scope="col">2. Ubica su sitiacion</th>
              <th scope="col"></th>
              <th scope="col">3. Publicalo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td><img src="img/data_enterprise.png" alt="" id="img1" width="100"></td>
              <td><img src="img/arrow.png" alt="" width="50" height="50"></td>
              <td><img src="img/gps_enterprise.png" alt="" id="img2" width="100"></td>
              <td><img src="img/arrow.png" alt="" width="50" height="50"></td>
              <td><img src="img/upload_enterprise.png" alt="" id="img3" width="100"></td>
            </tr>
          </tbody>
        </table>

        <input type="number" name="" id="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>" hidden>

      </section>
      <br>
      <!-- paso 1 DATOS -->
      <section id="paso1">
        <div class="borderTop" style=""></div>
        <br>

        <div class="datos" style="">
          <div class="">
            <label>Nombre: </label>
            <input type="text" name="nombre" value="" id="nombre" required>
            <label class="required" id="nombre_req">Campo obligatorio</label>
          </div>
          <select class="col-6 col-sm-6 col-md-6 form-control" name="provincia" id="select_provincia_crearEmp">

            <?php include "sql/consulta_provincia.php"; ?>

          </select>
          <select class="col-6 col-sm-6 col-md-6 form-control" name="localidad" id="select_localidad_crearEmp">
            <?php

              include "sql/buscador_localidad.php";

             ?>
          </select>
          <div class="">
            <label>Direccion: </label>
            <input type="text" name="zona" value="" id="zona">
          </div>
          <div class="">
            <label>CP: </label>
            <input type="number" name="cp" value="" id="cp">
          </div>
          <div class="">
            <button class="btn btn-primary pull-right" type="button" name="paso1" id="boton1">Siguiente</button>
          </div>
        </div>

        <br>
        <div class="borderBot" style=""></div>
      </section>


      <!-- paso 2 UBICACION -->
      <section id="paso2" style="display: none;">
        <div class="borderTop" style=""></div>
        <br>

        <div class="datos" style="">
          <h3>Selecione la ubicacion de la empresa <span class="required" id="map_req"> <small>(Obligatoria ubicacion)</small> </span> </h3>
          <div id="mapEmpresa" style="width: auto; height: 400px;"></div>
          <div class="">
            <button class="btn btn-primary pull-right" type="button" name="paso2" id="boton2">Siguiente</button>
          </div>
        </div>

        <br>
        <div class="borderBot" style=""></div>
      </section>

  <!-- coordenadas hidden  -->

  <input type="text" name="lat" id="lat" value="" hidden>
  <input type="text" name="lng" id="lng" value="" hidden>


  <!-- fin coordenadas hidden -->

      <!-- paso 3 PUBLICACION/REVISION -->
      <section id="paso3" style="display: none;">
        <div class="borderTop" style=""></div>
        <br>

        <div class="datos" style="">
          <h3>Revisa los datos antes de que sean publicados </h3>
          <table class="table-hover">
            <tbody>
              <tr>
                <th>Nombre: </th>
                <td><span id="span_nombre"></span></td>
              </tr>
              <tr>
                <th>Zona: </th>
                <td><span id="span_zona"></span></td>
              </tr>
              <tr>
                <th>CP: </th>
                <td><span id="span_cp"></span></td>
              </tr>
            </tbody>
          </table>
          <div id="mapEmpZone" style="width: auto; height: 400px;"></div>
          <div class="col-md-12">
            Valoracion de la empresa
            <br>
            <?php for($i=0;$i<5;$i++){?>
              <img id="filtro_estrella_<?php echo $i; ?>" class="filtro_estrella" src="../../image/estrella_vacia.png" width="20px" alt="">
            <?php } ?>
            <input type="number" name="" id="estrella" value="" hidden>
          </div>
          <div class="">
            <p style="font-size:30px;">Comentario:</p>
            <textarea name="coment" id="comentario" rows="8" cols="80" placeholder="Danos tu opinión"></textarea>
          </div>
          <div class="">
            <button class="btn btn-primary pull-right" type="button" name="paso3" id="boton3">Publicar</button>
          </div>
        </div>
        <br>
        <div class="borderBot" style=""></div>
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
    <script type="text/javascript" src="js/mapa.js"></script>

  </body>
</html>
