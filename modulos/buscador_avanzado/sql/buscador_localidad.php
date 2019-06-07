<?php @include_once('../../../conexion/conexion.php'); ?>

<?php

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

// variables necesarias
$select_todas = 0;
$id_localidad = null;
//aparecera la opcion elegida en el buscador principal
if (!empty($_GET['lc'])) {

  $id_localidad = $_GET['lc'];
  $sql_opt_localidad="SELECT * FROM localidad WHERE id = ".$id_localidad."";
  $aux_opt_localidad=mysqli_query($link, $sql_opt_localidad);
  $ex_opt_localidad = mysqli_fetch_assoc($aux_opt_localidad);

}

//consulta localidad
$sql_localidad="SELECT * FROM localidad WHERE ";

// si es nulo es que selecciona todas las localidad
if(!empty($id_provincia)){
  $sql_localidad.=" provincia_id='$id_provincia' ORDER BY nombre";
}else{
  $sql_localidad.=" 1 GROUP BY nombre";
  $select_todas=1;
}

$aux_localidad=mysqli_query($link,$sql_localidad);


  ?><option value="0">Todas las Localidades</option><?php
  while($ex_localidad=mysqli_fetch_assoc($aux_localidad)){

      $activo="";

      if($ex_localidad['id'] == $id_localidad){
        $activo="selected";
      }

      // marcamos la opccion seleccionada
      ?> <option value="<?php echo $ex_localidad['id'];?>" <?php echo $activo;?>><?php echo $ex_localidad['nombre'];?></option>

  <?php }


?>
