<?php

require_once "../../../conexion/conexion.php";

foreach ($_POST as $variable => $valor) {
  $$variable=$valor;
  echo $$variable;
}

// 
// echo $nombre;

 ?>
