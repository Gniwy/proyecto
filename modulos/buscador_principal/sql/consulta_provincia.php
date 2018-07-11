<?php

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_provincia="SELECT * FROM provincias WHERE comunidad_id='$id_comunidad'";
$aux_provincia=mysqli_query($link,$sql_provincia);


while($ex_provincia=mysqli_fetch_assoc($aux_provincia)){ ?>

    <option value="<?php echo $ex_provincia['id'];?>"><?php echo $ex_provincia['provincia'];?></option>

<?php }?>
