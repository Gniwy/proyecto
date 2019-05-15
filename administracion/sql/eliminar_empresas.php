<?php
require_once "../../conexion/conexion.php";

foreach ($_GET as $variable => $valor) {
  $$variable=$valor;
}

$delete_empresas = "DELETE FROM empresa WHERE id='$id_empresas'";
mysqli_query($link,$delete_empresas);


 ?>
