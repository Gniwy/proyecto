<?php

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$select_todas=0;

//consulta provincias
$sql_provincia="SELECT * FROM provincias WHERE ";

// si es nulo es que selecciona todas las provincias
if($id_comunidad!=""){
  $sql_provincia.=" comunidad_id='$id_comunidad' ";
}else{
  $sql_provincia.=" 1 ";
  $select_todas=1;
}

$aux_provincia=mysqli_query($link,$sql_provincia);

// si el selector esta a 0 quiere decir que a elejido una provincia
if($select_todas==0){
  while($ex_provincia=mysqli_fetch_assoc($aux_provincia)){ ?>

      <option value="<?php echo $ex_provincia['id'];?>"><?php echo $ex_provincia['provincia'];?></option>

  <?php }

}else{
  // si el selector esta a 1 quiere decir que a elejido que se muestren todas las provincias
    echo '<option value="0">Todas las provincias</option>';
}
?>
