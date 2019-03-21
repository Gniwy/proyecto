<?php @include_once('../../../conexion/conexion.php'); ?>
 
<?php

//aparecera la opcion elegida en el buscador principal
if (!empty($_GET['lugarp'])) {
  $id_provincia = $_GET['lugarp'];
  $sql_opt_provincia="SELECT * FROM provincia WHERE id = ".$id_provincia."";
  $aux_opt_provincia=mysqli_query($link, $sql_opt_provincia);
  $ex_opt_provincia = mysqli_fetch_assoc($aux_opt_provincia);

  ?>

  <option value="<?php echo $ex_opt_provincia['id']; ?>"><?php echo $ex_opt_provincia['nombre']; ?></option>

  <?php
}

?>

<option value="0">Todas las provincias</option>

<?php


// barra selectora de la provincia
$consulta = "SELECT * FROM provincia WHERE 1 ";
if (!empty($_GET['lugarp'])) {
  $consulta.= " AND  NOT id=".$_GET['lugarp']."";
}
$sql = mysqli_query($link,$consulta);

while ($row = mysqli_fetch_assoc($sql))
{
  echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
}


?>
