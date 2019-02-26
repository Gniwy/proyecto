<?php

include ('conexion/conexion.php');

foreach($_POST as $variable => $valor){
  $$variable=$valor;
}


$sql_comentarios="SELECT * FROM comentario WHERE id_empresa='$id_empresa' AND valoracion='$valoracion' ";
$aux_comentarios=mysqli_query($link, $sql_comentarios);

$contador=0;

while($ex_comentarios=mysqli_fetch_assoc($aux_comentarios)){
  $contador++;
}

echo $contador;

?>
