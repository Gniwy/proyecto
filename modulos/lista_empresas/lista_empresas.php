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

if($trabajo!=null){
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

    <div class="col col-sm-4 col-md-4 item" style="border: 1px solid green;">
      <?php echo $ex_empresas['nombre']; ?>
    </div>

    <?php
    }

    $cont_elementos++;

    if($cont_elementos%3 == 0 || $cont_elementos==0){
      $cont_filas++;
    }

}
