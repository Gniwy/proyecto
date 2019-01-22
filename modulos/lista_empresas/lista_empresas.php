
<link rel="stylesheet" href="modulos/lista_empresas/css/lista_empresas.css">

<?php

require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_empresas="SELECT * FROM empresa WHERE 1";

if($lugar!=null){
  $sql_lugar="SELECT * FROM localidad WHERE nombre LIKE '$lugar%' ";
  $aux_lugar=mysqli_query($link,$sql_lugar);

  $cp_lugares="1";

  while($ex_lugar=mysqli_fetch_assoc($aux_lugar)){
    $cp_lugares.=",".$ex_lugar['cp'];
  }

  $sql_empresas.=" AND cp IN ($cp_lugares) ";
}

if($trabajo!="null" && $trabajo!="" && $trabajo!=null){
  $sql_empresas.=" AND  id_categoria=$trabajo ";
}


$aux_empresas=mysqli_query($link,$sql_empresas);

$cont_filas=0;
$cont_elementos=0;


while($ex_empresas=mysqli_fetch_assoc($aux_empresas)){

  if($cont_elementos%3 == 0 && $cont_elementos!=0){ ?>
    </div>
  <?php }

  if($cont_filas<=3){
    if($cont_elementos%3 == 0 || $cont_elementos==0){ ?>
      <div class="row mt-4">
    <?php }?>

    <?php
      $primera_letra = strtolower($ex_empresas['nombre']);
     ?>

    <div class="col col-sm-4 col-md-4 item empresa pointer borde" id="empresa_<?php echo $ex_empresas['id'];?>">
      <?php echo $ex_empresas['nombre']; ?>
      <!-- <img src="image/img_<?php echo $primera_letra[0]; ?>.png" alt="" width="120" height="120" class="image_empresa"> -->
    </div>

    <?php
    }

    $cont_elementos++;

    if($cont_elementos%3 == 0 || $cont_elementos==0){
      $cont_filas++;
    }

}
?>

<script type="text/javascript" src="modulos/lista_empresas/js/lista_empresas.js"></script>
