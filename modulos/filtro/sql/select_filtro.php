<?php

@include_once('../../../conexion/conexion.php');

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

echo "-filtro1:".$filtro1."-filtro2:".$filtro2."-filtro3:".$filtro3."-filtro4:".$filtro4."---> Tole manco?";

if (!isset($_GET['c1'])) {
  echo "string";
}
 ?>
