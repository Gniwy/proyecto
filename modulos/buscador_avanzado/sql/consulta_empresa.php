<?php @include_once('../../../conexion/conexion.php'); ?>

<?php

//aparecera la opcion elegida en el buscador principal
if (!empty($_GET['empresa'])) {
  $id_empresa = $_GET['empresa'];
  $sql_opt_empresa="SELECT * FROM empresa WHERE id = ".$id_empresa."";
  $aux_opt_empresa=mysqli_query($link, $sql_opt_empresa);
  $ex_opt_empresa = mysqli_fetch_assoc($aux_opt_empresa);

  ?>

  <option value="<?php echo $ex_opt_empresa['id']; ?>" ><?php echo $ex_opt_empresa['nombre']; ?></option>

  <?php
}

?>

<option value="0">Todas las empresas</option>

<?php


// barra selectora de la empresa
$consulta = "SELECT * FROM empresa WHERE 1 ";
if (!empty($_GET['empresa'])) {
  $consulta.= " AND  NOT id=".$_GET['empresa']."";
}

  $consulta.=" GROUP BY nombre";

$sql = mysqli_query($link,$consulta);

while ($row = mysqli_fetch_assoc($sql))
{
  echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
}


?>
