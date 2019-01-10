<?php

session_start();

require_once "../../../conexion/conexion.php";

foreach($_POST as $variable => $valor){
  $$variable=$valor;
}

$id_cliente = $_SESSION['id_usuario'];

$sql_valorar="INSERT INTO comentarios_valoracion(`id_comentario`, `id_cliente`, `valoracion`) VALUES ($id_comentario,$id_cliente,$valoracion)";
echo $sql_valorar;
mysqli_query($link,$sql_valorar);



?>
