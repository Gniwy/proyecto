<?php
require_once "../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


$update_usuario="UPDATE usuario SET email='$email' WHERE id_cliente='$id_usuario'";
mysqli_query($link,$update_usuario);

$update_cliente="UPDATE cliente SET nick='$nick' WHERE id='$id_usuario'";
mysqli_query($link,$update_cliente);


?>
