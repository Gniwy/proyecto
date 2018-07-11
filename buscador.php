<?php
include('conexion/conexion.php');
if (isset($_POST['enviar']))
{
  // si se ha insertado la localidad se guarda
  if (isset($_POST['localidad']))
  {
    $localidad = $_POST['localidad'];
    $consultaCP = "SELECT cp FROM localidad WHERE nombre = '$localidad'";
    $sql = mysqli_query($link,$consultaCP);
    $row = mysqli_fetch_assoc($sql);

    // si no se inserta localidad se cogeran todos
    if ($localidad=='1')
    {
      $localidad = 1;
    }
  }
  // si se ha insertado el trabajo se guarda
  if (isset($_POST['trabajo']))
  {
    $trabajo = $_POST['trabajo'];

    // si no se inserta trabajo se cogeran todos
    if ($_POST['trabajo']==null) {
      $trabajo = 1;
    }
  }


  // consulta
  // falta sacar el cp de la comunidad
  $consulta = "SELECT * FROM empresa WHERE cp='$localidad' AND nombre='$trabajo'";
  $sql=$link->query($consulta);
  echo $consulta;
}

 ?>
