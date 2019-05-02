<?php

$id_empresa = $ex_empresas['id'];
// Calculo de valoracion media
$sql_calculo_valoracion_media="SELECT * FROM comentario WHERE id_empresa=$id_empresa";
$aux_calculo_valoracion_media=mysqli_query($link,$sql_calculo_valoracion_media);

$contador_valoracion=0;
$contador_comentarios=0;
while($ex_calculo_valoracion_media=mysqli_fetch_assoc($aux_calculo_valoracion_media)){

  $contador_valoracion=$contador_valoracion + $ex_calculo_valoracion_media['valoracion'];
  $contador_comentarios++;
}

$valoracion_media=round($contador_valoracion/$contador_comentarios);

?>
