<?php

session_start();

require_once "../../../conexion/conexion.php";

foreach($_POST as $variable => $valor){
  $$variable=$valor;
}

$id_cliente = $_SESSION['id_usuario'];

$sql_buscar_repetido="SELECT * FROM comentarios_valoracion WHERE id_comentario=$id_comentario AND id_cliente=$id_cliente";
$aux_buscar_repetido=mysqli_query($link, $sql_buscar_repetido);
$ex_buscar_repetido=mysqli_fetch_assoc($aux_buscar_repetido);

if($ex_buscar_repetido['id_comentario']==null){


  $sql_valorar="INSERT INTO comentarios_valoracion(`id_comentario`, `id_cliente`, `valoracion`) VALUES ($id_comentario,$id_cliente,$valoracion)";
  mysqli_query($link,$sql_valorar);

  echo "insertado";

}else{
  echo "repetido";
}

?>
