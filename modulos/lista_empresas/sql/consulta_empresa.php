

<?php  require_once "conexion/conexion.php"; ?>

<?php

//sacamos los valores del buscador principal
foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

//consulta principal desde van a partir las concatenaciones
$sql_empresas="SELECT e.nombre, id_localidad, valoracion_media FROM empresa e
                                    JOIN localidad l
                                    ON e.id_localidad = l.id
                                    JOIN provincia p
                                    ON l.provincia_id = p.id
                                    WHERE 1";

if(@$lugarp!=null && $lugarp!=0){
  // $sql_lugar="SELECT * FROM provincia WHERE provincia_id = $lugarp";
  // $aux_lugar=mysqli_query($link,$sql_lugar);
  //
  // while ($idProvincia = mysqli_fetch_assoc($aux_lugar)) {
  //   $sql_empresas.=' AND l.id = "'.$idProvincia['id'].'" ';
  // }
  $sql_empresas.=" AND p.id = $lugarp";

}elseif (@$lugarl!=null && $lugarl!=0)
{
  $sql_empresas.=" AND l.id = $lugarl";
}

if(@$empresa!="null" && @$empresa!="" && $empresa!=null){

  $sql_nombreEmp = "SELECT * FROM empresa WHERE id = $empresa";
  $aux_nombreEmp = mysqli_query($link, $sql_nombreEmp);

  while($nombreEmp=mysqli_fetch_assoc($aux_nombreEmp)){
    $sql_empresas.=' AND  e.nombre= "'.$nombreEmp['nombre'].'" ';
  }

}
// guardo consulta
// $consultaFinal = $sql_empresas;
$consultaFinal=password_hash($sql_empresas, PASSWORD_BCRYPT); //encrito consulta

 ?>
