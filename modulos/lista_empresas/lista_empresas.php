
<link rel="stylesheet" href="modulos/lista_empresas/css/lista_empresas.css">

<?php

include_once "../../conexion/conexion.php";

$filtro1=null;
$filtro2=null;
$filtro3=null;
$mas_puntuada=null;

//sacamos los valores
foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

echo "***".$mas_puntuada;

/************************/

// $sql="SELECT * FROM empresas WHERE 1";
//
// if($todas_provincias!=0){
//   $sql_consulta.=" AND provincia=$provincia";
// }
//
// if($todas_localidad!=0){
//   $sql_consulta.=" AND provincia=$provincia";
// }
//
// if($mas_puntuada!=null){
//   $sql_consulta.=" AND sdafj=$sdf";
// }

/*************************/

include 'sql/consulta_empresa.php';


$sql_consulta = "UPDATE buscador SET consulta = ('$consultaFinal') WHERE 1";
$aux_consulta = mysqli_query($link, $sql_consulta);

$aux_empresas=mysqli_query($link,$sql_empresas);

$cont_filas=0;
$cont_elementos=0;

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
// registro vacio
$numFila = mysqli_num_rows($aux_empresas);
if ($numFila<=0) {
  ?>

  <span style="color:rgba(156, 9, 9, 0.84); text-align: center;">No se encontro contenido con esta busqueda</span>

  <?php
}
?>

<script type="text/javascript" src="modulos/lista_empresas/js/lista_empresas.js"></script>
