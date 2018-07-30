<?php
require_once "../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


$update_empresas="UPDATE empresa SET nombre='$nombre' WHERE id='$id'";
mysqli_query($link,$update_empresas);

$update_empresas="UPDATE empresa SET calle='$calle' WHERE id='$id'";
mysqli_query($link,$update_empresas);

$update_empresas="UPDATE empresa SET cp='$cp' WHERE id='$id'";
mysqli_query($link,$update_empresas);

?>
