<?php
require_once "../../conexion/conexion.php";

foreach ($_GET as $variable => $valor) {
  $$variable=$valor;
}

$sql_coment = "SELECT * FROM comentarios_valoracion WHERE id_comentario in (SELECT id FROM comentario WHERE id_empresa='$id_empresas')";
while ($row=mysql_fetch_array($sql_coment)){
//Borrar archivo asociado
unlink($row['id_comentario']);
}


$delete_valoracion = "DELETE FROM comentarios_valoracion WHERE id_comentario in (SELECT id FROM comentario WHERE id_empresa='$id_empresas')";
mysqli_query($link, $delete_valoracion);

$delete_coment = "DELETE FROM comentario WHERE id_empresa='$id_empresas'";
mysqli_query($link, $delete_coment);


$delete_empresas = "DELETE FROM empresa WHERE id='$id_empresas'";
mysqli_query($link,$delete_empresas);


 ?>
