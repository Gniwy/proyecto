<?php

require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}


$sql_registro="INSERT INTO cliente(nick) VALUES('$nick')";
mysqli_query($link,$sql_registro);


?>
