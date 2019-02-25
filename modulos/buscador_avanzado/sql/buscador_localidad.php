<?php include_once('../../../conexion/conexion.php'); ?>

<?php

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$select_todas=0;

//consulta localidad
$sql_localidad="SELECT * FROM localidad WHERE ";

// si es nulo es que selecciona todas las localidad
if($id_provincia!=""){
  $sql_localidad.=" provincia_id='$id_provincia' ORDER BY nombre";
}else{
  $sql_localidad.=" 1 ORDER BY nombre";
  $select_todas=1;
}

$aux_localidad=mysqli_query($link,$sql_localidad);

// si el selector esta a 0 quiere decir que a elejido una provincia
if($select_todas==0){
  while($ex_localidad=mysqli_fetch_assoc($aux_localidad)){ ?>

      <option value="<?php echo $ex_localidad['id'];?>"><?php echo $ex_localidad['nombre'];?></option>

  <?php }

}else{
  // si el selector esta a 1 quiere decir que a elejido que se muestren todas las provincias
    echo '<option value="0">Todas las Localidades</option>';
    while($ex_localidad=mysqli_fetch_assoc($aux_localidad)){ ?>

        <option value="<?php echo $ex_localidad['id'];?>"><?php echo $ex_localidad['nombre'];?></option>

    <?php }
}
?>
