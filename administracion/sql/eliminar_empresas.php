<?php
require_once "../../conexion/conexion.php";

foreach ($_GET as $variable => $valor) {
  $$variable=$valor;
}

$delete_empresas = "UPDATE empresa SET activo = 0  WHERE id='$id'";
mysqli_query($link,$delete_empresas);


 ?>
