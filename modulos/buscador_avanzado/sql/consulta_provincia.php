<?php @include_once('../../../conexion/conexion.php'); ?>

<?php

// variables necesarias
$id_provincia = null;
//aparecera la opcion elegida en el buscador principal
if (!empty($_GET['lugarp'])) {
  $id_provincia = $_GET['lugarp'];
  $sql_opt_provincia="SELECT * FROM provincia WHERE id = ".$id_provincia."";
  $aux_opt_provincia=mysqli_query($link, $sql_opt_provincia);
  $ex_opt_provincia = mysqli_fetch_assoc($aux_opt_provincia);

}


// barra selectora de la provincia
$consulta = "SELECT * FROM provincia WHERE 1 ORDER BY nombre";

$aux_provincia = mysqli_query($link,$consulta);


?><option value="0">Todas las Provincia</option><?php

while($ex_provincia=mysqli_fetch_assoc($aux_provincia)){

    $activo="";

    if($ex_provincia['id'] == $id_provincia){
      $activo="selected";
    }
    // marcamos la opccion seleccionada
    ?> <option value="<?php echo $ex_provincia['id'];?>" <?php echo $activo;?>><?php echo $ex_provincia['nombre'];?></option>

<?php }


?>
