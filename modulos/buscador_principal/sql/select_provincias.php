<?php
require_once "../../../conexion/conexion.php";

$sql_provincia="SELECT id, nombre FROM provincia GROUP BY nombre";
$aux_provincia=mysqli_query($link,$sql_provincia);


?> <option value="0" selected style="color:rgb(184, 182, 181)grey;">Provincia</option> <?php
while ($ex_provincia=mysqli_fetch_assoc($aux_provincia)) { ?>

  <option value="<?php echo $ex_provincia['id'];?>"><?php echo $ex_provincia['nombre'];?></option>

<?php } ?>

<!-- // $texto="";

 foreach($_GET as $variable => $valor){
   $$variable=$valor;
 }

// se crea un array donde se guarda las localidades
 $array_localidades= array();

 $sql_localidad = 'SELECT * FROM localidad WHERE 1';

 if($texto!=null){
   $sql_localidad.= " AND nombre LIKE '$texto%'";
 }

 $aux_provincia=mysqli_query($link, $sql_localidad);


 while($ex_provincia=mysqli_fetch_assoc($aux_provincia)) {

   array_push($array_localidades,$ex_provincia['nombre']);

 }

//print_r($array_localidades);

 echo json_encode($array_localidades); -->
