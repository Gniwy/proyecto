<?php
require_once "../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$update_cliente="UPDATE cliente SET bloqueado=1 WHERE id='$id_usuario'";
mysqli_query($link,$update_cliente);


?>
