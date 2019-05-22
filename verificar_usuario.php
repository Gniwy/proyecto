<?php

@session_start();

require_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_desbloquear_usuario="UPDATE cliente SET bloqueado=0 WHERE id=$id ";
mysqli_query($link,$sql_desbloquear_usuario);

header('Location: http://ireferences.es');
?>
