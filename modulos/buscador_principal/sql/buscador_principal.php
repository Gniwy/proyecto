<?php
require_once "../../../conexion/conexion.php";

foreach($_GET as $variable => $valor){
  $$variable=$valor;
}

// se crea un array donde se guarda las localidades
$array_localidades= array('');

$sql_localidad = 'SELECT nombre FROM localidad WHERE 1';
$aux_provincia=mysqli_query($link, $sql_localidad);

?>
<select name="selecion_localidad" id="selecion_localidad">
  <?php
    while($ex_provincia=mysqli_fetch_assoc($aux_provincia)) {

      // inserto cada valor devuelta en el $array_localidades
      // array_push($array_localidades, $ex_provincia);
      // echo $ex_provincia['nombre'];
      // print_r($array_localidades);
      // echo '<option value="">'.$ex_provincia['nombre'].'</option>';
      ?>
      <li onClick="selectCountry('<?php echo $ex_provincia["nombre"]; ?>');"><?php echo $ex_provincia["nombre"]; ?></li>


    <?php } ?>

<?php echo json_encode($array_localidades); ?>
</select>
