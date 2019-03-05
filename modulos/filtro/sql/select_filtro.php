<?php

@include_once('../../../conexion/conexion.php');

<<<<<<< HEAD
=======
$filtro1=null;
$filtro2=null;
$filtro3=null;
$filtro4=null;


>>>>>>> b68e86007a7af547bdba956fcaac768af7fa6c78
foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

echo "-filtro1:".$filtro1."-filtro2:".$filtro2."-filtro3:".$filtro3."-filtro4:".$filtro4."---> Tole manco?";

if (!isset($_GET['c1'])) {
  echo "string";
}
 ?>
