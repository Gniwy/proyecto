<?php
require_once "../../../conexion/conexion.php";

$texto="";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

// se crea un array donde se guarda las localidades
$array_localidades= array();

$sql_localidad = 'SELECT * FROM localidad WHERE 1';

if($texto!=null){
  $sql_localidad.= " AND nombre LIKE '%$texto%'";
}

$aux_provincia=mysqli_query($link, $sql_localidad);


while($ex_provincia=mysqli_fetch_assoc($aux_provincia)) {

  array_push($array_localidades,$ex_provincia['nombre']);

}

//print_r($array_localidades);

echo json_encode($array_localidades);

?>
