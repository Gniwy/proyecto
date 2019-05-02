
<link rel="stylesheet" href="modulos/lista_empresas/css/lista_empresas.css">

<?php

include_once "../../conexion/conexion.php";

$checked=[];
$lugarp = 0;
$lc = 0;
$empresa = 0;

//sacamos los valores
foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


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

  if($cont_filas>=0){//filas infinitas sin paginación
    if($cont_elementos%3 == 0 || $cont_elementos==0){ ?>
      <div class="row mt-4 filaRow">
    <?php }?>

    <?php
      $primera_letra = strtoupper($ex_empresas['nombre']);
      $resto_letra = substr($ex_empresas['nombre'], 1);
     ?>

      <div class="col-12 col-md-4 card">

        <div class="card-body">
          <p class="nombreEmp"> <span style="color: #00B0EE;"><?php echo $primera_letra[0]; ?></span><span style="color: #F8A243;"><?php echo $resto_letra; ?></span> </p>
        </div>

          <?php include 'sql/reputacion.php'; ?>

        <div class="valoracionEmp"><!-- valoracion media de las empresas -->
          <!-- Reputacion -->
          <?php for($i=0;$i<$valoracion_media;$i++){?>
            <img src="image/estrella_rellenada.png" class="img-responsive" width="10px" title="<?php echo $i+1 ?>">
          <?php } ?>

          <?php for($i=$valoracion_media;$i<5;$i++){?>
            <img src="image/estrella_vacia.png" class="img-responsive" width="10px" title="<?php echo $i+1 ?>">
          <?php } ?>
        </div>

        <ul class="list-group list-group-flush">

          <?php /*datos tabla comentario*/
          $id_emp = $ex_empresas['id'];

          $sql_datoEmp = "SELECT count(c.id) total from comentario c
          join empresa e
          on c.id_empresa = e.id
          where e.id = $id_emp ";
          $aux_datoEmp = mysqli_query($link, $sql_datoEmp);

          while($ex_datoEmp = mysqli_fetch_assoc($aux_datoEmp)) {
            ?>

          <li class="list-group-item">Comentario: <?php echo $ex_datoEmp['total']; ?></li>

          <?php
        }
        ?>
          <li class="list-group-item address">Direccion: <?php echo $ex_empresas['calle'].', CP: '.$ex_empresas['cp'];?></li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body boton">
          <span class="btn btn-primary empresa" id="empresa_<?php echo $ex_empresas['id'];?>">Ver Ficha</span>
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

  <span class="noEncontrado">No se encontro contenido con esta busqueda</span>

  <?php
}
?>

<script type="text/javascript" src="modulos/lista_empresas/js/lista_empresas.js"></script>
