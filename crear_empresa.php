<?php include ('conexion/conexion.php'); ?>

<?php
error_reporting(0);
session_start();

if( (isset($_SESSION['id_usuario'])) ){

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="image/ico_logo.ico" />
    <title>Crear Empresa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_vista2.css">
    <!-- mapa -->
    <link rel="stylesheet" href="leaflet/leaflet.css">

    <link rel="stylesheet" href="modulos/crear_empresa/css/crear_empresa.css">

    <script src="js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/index.js"></script>

    <!-- jQuery autocomplete (accion select_lugar) -->
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />





  </head>
  <body>
    <section>
      <?php include "modulos/menu_top/menu_top.php"; ?>
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
              <td><img src="modulos/crear_empresa/img/data_enterpriseFocus.png" alt="" id="img1" width="100"></td>
              <td><img src="modulos/crear_empresa/img/arrow.png" alt="" width="50" height="50"></td>
              <td><img src="modulos/crear_empresa/img/gps_enterprise.png" alt="" id="img2" width="100"></td>
              <td><img src="modulos/crear_empresa/img/arrow.png" alt="" width="50" height="50"></td>
              <td><img src="modulos/crear_empresa/img/upload_enterprise.png" alt="" id="img3" width="100"></td>
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

          <div class="form-group">
            <label for="inputName">Nombre: </label>
            <input type="text" class="form-control" id="nombre" placeholder="">
            <label class="required" id="nombre_req">Campo obligatorio</label>
          </div>
          <div class="form-group">
            <label for="inputAddress">Direccion: </label>
            <input type="text" class="form-control" id="zona" placeholder="">
            <label class="required" id="zona_req">Campo obligatorio</label>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Provincia</label>
              <select class="form-control" name="provincia" id="select_provincia_crearEmp">
                <option value="0">Todos</option>

                <?php include "modulos/crear_empresa/sql/consulta_provincia.php"; ?>

              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Localidad</label>
              <select class="form-control" name="localidad" id="select_localidad_crearEmp">
                <option selected disabled>Elige...</option>

                <?php include "modulos/crear_empresa/sql/buscador_localidad.php"; ?>

              </select>
              <label class="required" id="localidad_req">Campo obligatorio</label>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="number" class="form-control" id="cp">
              <label class="required" id="cp_req">Campo obligatorio</label>
            </div>
          </div>
          <div class="">
            <button type="submit" class="btn btn-primary" name="paso1" id="boton1">Siguiente</button>
          </div>

        </div>

        <br>
        <div class="borderBot" style=""></div>
      </section>

      <input type="hidden" id="comprobacion" value="1">


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
  <input type="hidden" id="estrella" value="0">


  <!-- fin coordenadas hidden -->

      <!-- paso 3 PUBLICACION/REVISION -->
      <section id="paso3" style="display: none;">
        <div class="borderTop" style=""></div>
        <br>

        <div class="datos" style="">
          <h3>Revisa los datos antes de que sean publicados </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Zona</th>
                <th>CP/Zip</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span id="span_nombre"></span></td>
                <td><span id="span_zona"></span></td>
                <td><span id="span_cp"></span></td>
              </tr>
            </tbody>
          </table>
          <div class="col-md-12">
            <h3 class="text-center">Valoracion de la empresa</h3>
            <br>
            <div class="estrellas">
              <?php for($i=1;$i<=5;$i++){?>
                <img id="filtro_estrella_<?php echo $i; ?>" class="filtro_estrella" src="image/estrella_vacia.png" width="20px" alt="" title="<?php echo $i; ?>">
              <?php } ?>
            </div>
          </div>
          <div class="">
            <p style="font-size:30px;">Comentario:</p>
            <textarea class="form-control" name="coment" id="comentario" rows="1" cols="80" placeholder="Danos tu opinión"></textarea>
          </div>

          <div class="">
            <button class="btn btn-primary pull-right" type="button" name="paso3" id="boton3">Publicar</button>
          </div>
        </div>
        <br>
        <div class="borderBot" style=""></div>
      </section>

    </div>

    <!-- Fondo menu principal -->
    <div class='ripple-background'>
      <div class='circle xxlarge shadow1'></div>
      <div class='circle xlarge shadow2'></div>
      <div class='circle large shadow3'></div>
      <div class='circle medium shadow4'></div>
      <div class='circle small shadow5'></div>
    </div> <!-- Fin de ripple -->

    <input type="hidden" id="bandPaso1" name="" value="0">

    <footer>
      <?php include "modulos/footer/footer.php"; ?>
    </footer>

    <script type="text/javascript" src="leaflet/leaflet.js"></script>
    <script type="text/javascript" src="leaflet/plugins/Search.js"></script>
    <script type="text/javascript" src="leaflet/plugins/L.Control.Locate.js"></script>
    <!-- script pagina -->
    <script type="text/javascript" src="modulos/crear_empresa/js/crear_empresa.js"></script>
    <script type="text/javascript" src="modulos/crear_empresa/js/crear_empresa_mapa.js"></script>

  </body>
</html>

<?php
}else{
  echo "<script>window.location='https://ireferences.es'</script>";
}?>
