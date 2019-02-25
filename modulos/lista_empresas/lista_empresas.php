
<link rel="stylesheet" href="modulos/lista_empresas/css/lista_empresas.css">

<?php

require_once "conexion/conexion.php";

include 'sql/consulta_empresa.php';



$sql_consulta = "UPDATE buscador SET consulta = ('$consultaFinal') WHERE 1";
$aux_consulta = mysqli_query($link, $sql_consulta);



$aux_empresas=mysqli_query($link,$sql_empresas);

$cont_filas=0;
$cont_elementos=0;
echo $consultaFinal;
while($ex_empresas=mysqli_fetch_assoc($aux_empresas)){

  if($cont_elementos%3 == 0 && $cont_elementos!=0){ ?>
    </div>
  <?php }

  if($cont_filas<=3){
    if($cont_elementos%3 == 0 || $cont_elementos==0){ ?>
      <div class="row mt-4 filaRow">
    <?php }?>

    <?php
      $primera_letra = strtoupper($ex_empresas['nombre']);
     ?>

    <div class="col-12 col-md-4 item empresa pointer" style="position: relative;" id="empresa_<?php echo $ex_empresas['id_localidad'];?>">
      <p class="nombreEmp"><?php echo $ex_empresas['nombre']; ?></p>
      <div class="logoEmp">
        <p><?php echo $primera_letra[0]; ?></p>
      </div>
      <div class="col-8 valoracionAVG"><!-- valoracion media de las empresas -->
        <?php
        $valoracionAVG = $ex_empresas['valoracion_media'];

        for($i=0;$i<$valoracionAVG;$i++){?>
          <img src="image/estrella_rellenada.png" class="img-responsive" width="10px" alt="">
        <?php } ?>

        <?php for($i=$valoracionAVG;$i<5;$i++){?>
          <img src="image/estrella_vacia.png" class="img-responsive" width="10px" alt="">
        <?php } ?>
      </div>
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
