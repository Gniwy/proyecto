<?php

@include_once('../../../conexion/conexion.php');

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

// if ($filtro1!=null && $filtro1!=0) {
//   $comentada = true;
//   echo $comentada;
// }else {
//   $comentada = false;
//   echo $comentada;
//
// }
//
// if ($filtro2!=null && $filtro2!=0) {
//   $tmn = true;
// }else {
//   $tmn = false;
// }
//
// if ($filtro3!=null && $filtro3!=0) {
//   $valoracion = true;
// }else {
//   $valoracion = false;
// }
//
// if ($filtro4!=null && $filtro4!=0) {
//   $nombre = true;
// }else {
//   $nombre = false;
// }

// echo "-filtro1:".$filtro1."-filtro2:".$filtro2."-filtro3:".$filtro3."-filtro4:".$filtro4."---> Tole manco?";


 ?>
