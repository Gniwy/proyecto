<!DOCTYPE html>

<?php

error_reporting(0);
require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_empresa="SELECT * FROM empresa WHERE id=".$id_empresa;
$aux_empresa=mysqli_query($link,$sql_empresa);
$ex_empresa=mysqli_fetch_assoc($aux_empresa);

$nombre=$ex_empresa['nombre'];
$calle=$ex_empresa['calle'];
$cp=$ex_empresa['cp'];
$valoracion=$ex_empresa['valoracion_media'];

// coordenadas
$lat = $ex_empresa['lat'];
$lng = $ex_empresa['lng'];

/*Comentario mas puntuado*/
$sql_comentario_relevante="SELECT * FROM comentario WHERE id_empresa=".$id_empresa;
$aux_comentario_relevante=mysqli_query($link,$sql_comentario_relevante);

$array_comentarios=array();

while($ex_comentario_relevante=mysqli_fetch_assoc($aux_comentario_relevante)){
  $id_comentario=$ex_comentario_relevante['id'];
  $sql_votos="SELECT * FROM comentarios_valoracion WHERE id_comentario=".$id_comentario;
  $aux_votos=mysqli_query($link, $sql_votos);
  $votos=0;

  while($ex_votos=mysqli_fetch_assoc($aux_votos)){

    $votos++;

  }

  $array=array("id" => $id_comentario,"votos" => $votos);
  array_push($array_comentarios,$array);

}

$mas_votado=array();
$mas_votos=0;
for ($i=0;$i<sizeof($array_comentarios);$i++)
{
    if($array_comentarios[$i][votos]>$mas_votos){
      $mas_votado=array('id' => $array_comentarios[$i]['id'], 'votos' => $array_comentarios[$i]['votos']);
      $mas_votos=$array_comentarios[$i]['votos'];
    }
}

?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista2</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="modulos/footer/css/footer.css">
    <link rel="stylesheet" href="modulos/buscador_principal/css/buscador_principal.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="modulos/filtro/css/style.css">
    <link rel="stylesheet" href="css/style_vista2.css">
    <link rel="stylesheet" href="css/ficha_empresa.css">
    <!-- mapa -->
    <link rel="stylesheet" href="leaflet/leaflet.css">

    <script src="js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/index.js"></script>


    <!-- jQuery autocomplete (accion select_lugar) -->
    <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
  </head>
  <body>
    <section>
      <?php include "modulos/menu_top/menu_top.php"; ?>
    </section>

    <div class="offset-md-2 col-md-8" style="border:solid 1px black;">
      <!-- Datos de la empresa-->
      <div class="row">
        <div class="col-md-6">
          <table class="table table-stripped">
            <tr>
              <th style="font-size:30px;">Datos de -Empresa-</th>
            </tr>
            <tr>
              <td class="text-right" width="50%">Nombre:</td>
              <td> <?php echo $nombre;?> </td>
            </tr>
            <tr>
              <td class="text-right">Localidad:</td>
              <td> --- </td>
            </tr>
            <tr>
              <td class="text-right">CP:</td>
              <td> <?php echo $cp;?> </td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 text-center">
          <input type="text" name="" value="<?php echo $lat; ?>" id="lat" hidden>
          <input type="text" name="" value="<?php echo $lng; ?>" id="lng" hidden>
          <div id="mapFichaEmp" style="width:100%; height: 400px;">
          </div>
          <!-- <img src="http://www.igad.edu.ec/img/titulo-matriculas-abiertas.png" alt="" width="300" height="200"> -->
        </div>
      </div>
      <!-- Fin datos de la empresa-->

      <!-- Reputacion + estrellas-->
      <div class="row">
        <p style="font-size:30px;">Reputación:</p>

          <div style="margin-top:11px; margin-left:10px; margin-bottom:25px;">
            <?php for($i=0;$i<$valoracion;$i++){?>
              <img src="image/estrella_rellenada.png" width="30px" alt="">
            <?php } ?>

            <?php for($i=$valoracion;$i<5;$i++){?>
              <img src="image/estrella_vacia.png" width="30px" alt="">
            <?php } ?>
          </div>

      </div>
      <!-- Fin eputacion + estrellas-->

      <div class="row">

        <!-- Comentario relevante -->
        <div class="col-md-6">
          <h3 class="redondeado" style="background:#ffec88;">Comentario relevante</h3>
          <div class="Comentario">
            <?php


            $sql_comentario_relevante_mostrar="SELECT * FROM comentario WHERE id=".$mas_votado['id'];
            $aux_comentario_relevante_mostrar=mysqli_query($link, $sql_comentario_relevante_mostrar);
            $ex_comentario_relevante_mostrar=mysqli_fetch_assoc($aux_comentario_relevante_mostrar);

            $id_cliente_comentario=$ex_comentario_relevante_mostrar['id_cliente'];
            $texto_comentario=$ex_comentario_relevante_mostrar['texto'];
            $valoracion_comentario=$ex_comentario_relevante_mostrar['valoracion'];

            $sql_cliente_relevante="SELECT * FROM cliente WHERE id=".$id_cliente_comentario;
            $aux_cliente_relevante=mysqli_query($link,$sql_cliente_relevante);
            $ex_cliente_relevante=mysqli_fetch_assoc($aux_cliente_relevante);

            $nick_cliente_relevante=$ex_cliente_relevante['nick'];
            ?>

            <div class="row">
              <div class="col-md-6">
                <h4>
                  <?php echo $nick_cliente_relevante; ?>

                  <?php
                  $valoracion=$ex_comentario_relevante_mostrar['valoracion'];

                  for($i=0;$i<$valoracion;$i++){?>
                    <img src="image/estrella_rellenada.png" width="20px" alt="">
                  <?php } ?>

                  <?php for($i=$valoracion;$i<5;$i++){?>
                    <img src="image/estrella_vacia.png" width="20px" alt="">
                  <?php } ?>
                </h4>
              </div>
              <div class="col-md-6 text-right">
                (Hace 1 dia) 12:38
              </div>
            </div>


            <div class="">
              <?php echo $texto_comentario; ?>
              <a href="#">Leer más</a>
            </div>

            <div class="text-right">
              <i class="far fa-thumbs-up fa-2x pointer" style="color:green;"></i>
              5 votos
              &nbsp;
              <i class="far fa-thumbs-down fa-2x pointer" style="color:red;"></i>
              10 votos
            </div>

          </div>
          <hr>
        </div>
        <!-- Fin comentario relevante -->

        <!-- Filtro -->
        <div class="col-md-12" style="margin-top:10px; border: solid 1px black; padding-bottom:15px;">

          <div class="col-md-12 color" style="margin-top:10px;">
            <h4>Filtros</h4>
          </div>
          <hr>
          <div class="col-md-12">
            Valoracion del comentario
            <br>
            <?php for($i=0;$i<5;$i++){?>
              <img id="filtro_estrella_<?php echo $i; ?>" class="filtro_estrella" src="image/estrella_vacia.png" width="20px" alt="">
            <?php } ?>
          </div>


      </div>

      <!-- Fin filtro -->

      <div class="col-md-12" style="margin-top:20px;">
        <h1>Comentarios</h1>

        <?php include "modulos/comentarios/comentarios.php";?>
      </div>


    </div>
  </body>
  <!-- mapa  -->
  <script type="text/javascript" src="leaflet/leaflet.js"></script>
</html>

<script type="text/javascript" src="js/ficha_empresa.js"></script>
<script type="text/javascript" src="js/mapaFichaEmpresa.js"></script>
