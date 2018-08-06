<?php
require_once "../../conexion/conexion.php";

foreach($_GET as $variable => $valor) {
  $$variable = $valor;
}

$update_empresas="UPDATE empresa SET activo = 1 WHERE id='$id_empresas'";
mysqli_query($link,$update_empresas);

 ?>
