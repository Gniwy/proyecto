<!DOCTYPE html>

<?php

require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


?>


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
    <link rel="stylesheet" href="css/ficha_empresa.css">
    <script src="js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/index.js"></script>

    <script type="text/javascript" src="modulos/menu_top/js/menu_top.js"></script>

    <!-- jQuery autocomplete (accion select_lugar) -->
    <script type="text/javascript" src="modulos/buscador_principal/js/buscador_principal.js"></script>

  </head>
  <body>
    <section>
      <?php include"modulos/menu_top/menu_top.php"; ?>
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
              <td> --- </td>
            </tr>
            <tr>
              <td class="text-right">Localidad:</td>
              <td> --- </td>
            </tr>
            <tr>
              <td class="text-right">CP:</td>
              <td> --- </td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 text-center">
          <img src="http://www.igad.edu.ec/img/titulo-matriculas-abiertas.png" alt="" width="300" height="200">
        </div>
      </div>
      <!-- Fin datos de la empresa-->

      <!-- Reputacion + estrellas-->
      <div class="row">
        <p style="font-size:30px;">Reputación:</p>
          <div style="margin-top:11px; margin-left:10px; margin-bottom:25px;">
            <?php $i=0; while($i<5){?>
            <i class="fas fa-star" style="font-size:20px; color:#ff8a00;"></i>&nbsp;
            <?php $i++; } ?>
          </div>
      </div>
      <!-- Fin eputacion + estrellas-->

      <div class="row">

        <!-- Comentario relevante -->
        <div class="col-md-6">
          <h3 class="redondeado" style="background:#ffec88;">Comentario relevante</h3>
          <div class="Comentario">

            <div class="row">
              <div class="col-md-6">
                <h4>Manueh</h4>
              </div>
              <div class="col-md-6 text-right">
                (Hace 1 dia) 12:38
              </div>
            </div>


            <div class="">
              !Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident, sunt in culpa qui officia deserunt orum... <a href="#">Leer más</a>
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
        <div class="col-md-12" style="margin-top:10px; background:#ffe1af;">
          <div class="col-md-4">
            <div class="col-md-12">
              Puntuación
            </div>
              <div class="col-md-12">
                <?php $i=0; while($i<5){ ?>
                  <div class="row">
                    <div class="col-md-4">
                      <input type="checkbox" name="" value="">
                      Excelente
                    </div>
                    <div class="col-md-6">
                      <div class="progressbar" style="height:10px; margin-top:5px;">
                      </div>
                    </div>
                    <div class="col-md-1">
                      56
                    </div>
                  </div>
                <?php $i++; }?>
                <!--
              <div class="col-md-12">
                <input type="checkbox" name="" value=""> Muy bueno
              </div>
              <div class="col-md-12">
                <input type="checkbox" name="" value=""> Normal
              </div>
              <div class="col-md-12">
                <input type="checkbox" name="" value=""> Malo
              </div>
              <div class="col-md-12">
                <input type="checkbox" name="" value=""> Pésimo
              </div>
            -->
            </div>


        </div>

      </div>

      <!-- Fin filtro -->

      <div class="col-md-12" style="margin-top:20px;">
        <h1>Comentarios</h1>

        <?php include "modulos/comentarios/comentarios.php";?>
      </div>


    </div>
  </body>
</html>

<script type="text/javascript" src="js/ficha_empresa.js"></script>
