<?php
include('conexion/conexion.php');
if (isset($_POST['enviar']))
{
  echo $_POST['localidad'];
  // si se ha insertado la localidad se guarda
  if (isset($_POST['localidad']))
  {
    $localidad = $_POST['localidad'];
    $consultaCP = "SELECT cp FROM localidad WHERE nombre = '$localidad'";
    $sql = mysqli_query($link,$consultaCP);
    $row = mysqli_fetch_assoc($sql);
    $cpLocalidad = $row['cp'];
  }
  // si no se inserta localidad se cogeran todos
  else
  {
    $localidad = 1;
  }
  // si se ha insertado el trabajo se guarda
  if (isset($_POST['trabajo']))
  {
    $trabajo = $_POST['trabajo'];
  }
  // si no se inserta trabajo se cogeran todos
  else
  {
    $trabajo = 1;
  }

  // consulta
  // falta sacar el cp de la comunidad
  $consulta = "SELECT * FROM empresa WHERE cp='$cpLocalidad' AND nombre='$trabajo'";
  $sql=$link->query($consulta);
  echo $consulta;
echo "string";
}

 ?>
