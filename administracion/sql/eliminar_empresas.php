<?php
require_once "../../conexion/conexion.php";

foreach ($_GET as $variable => $valor) {
  $$variable=$valor;
}

$id_coment = "SELECT id FROM comentario WHERE id_empresa='$id_empresas'";

$delete_valoracion = "DELETE FROM comentarios_valoracion WHERE id_comentario='$id_coment'";
mysqli_query($link, $delete_valoracion);

$delete_coment = "DELETE FROM comentario WHERE id_empresa='$id_empresas'";
mysqli_query($link, $delete_coment);


$delete_empresas = "DELETE FROM empresa WHERE id='$id_empresas'";
mysqli_query($link,$delete_empresas);


 ?>
