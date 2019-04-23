<?php

include_once "conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

$sql_publicar_comentario="INSERT INTO comentario(id_cliente,texto,valoracion,id_empresa) VALUES($id_cliente,'$texto',$valoracion,$id_empresa)";
mysqli_query($link,$sql_publicar_comentario);

echo $sql_publicar_comentario;

?>
