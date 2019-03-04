<?php require_once ('conexion/conexion.php'); ?>

<section class="form-inline col-centrada col-12">
  <div class="col-12 img"></div>
  <div class="row form-group col-10 mb-2">
    <select class="col-6 col-sm-6 col-md-6 form-control" name="provincia" id="select_provincia">

      <?php include "sql/consulta_provincia.php"; ?>

    </select>
    <select class="col-6 col-sm-6 col-md-6 form-control" name="localidad" id="select_localidad">
      <?php

        include "sql/buscador_localidad.php";

       ?>
    </select>
    <select class="col-12 form-control" name="empresa" id="select_empresa_avanzado">
      <?php
        include 'sql/consulta_empresa.php';
       ?>
    </select>
  </div>
  <div class="col-2">
    <input type="submit" name="enviar" value="Buscar" id="btn_busqueda_avanzado" class="btn btn-primary mb-2">
  </div>
  <?php if(!isset($_SESSION['id_usuario'])){ ?>

    <div class="col-md-12 text-center">
      Registrate si necesitas crear tu empresa
    </div>

  <?php }else{ ?>
    <div class="col-md-12 text-center">
      ¿No encuentras la empresa que buscas?
      <a href="modulos/crear_empresa/crear_empresa.php"><button type="button" class="btn-warning btn" name="button" id="btn_modal_empresa"> Creala</button></a>
  <?php } ?>

  </div>
</section>
<script type="text/javascript" src="modulos/buscador_avanzado/js/buscador_avanzado.js"></script>
