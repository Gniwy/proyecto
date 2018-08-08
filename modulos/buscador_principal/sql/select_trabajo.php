<?php
require_once "../../../conexion/conexion.php";


$sql_trabajos="SELECT * FROM categorias_trabajos";
$aux_trabajos=mysqli_query($link,$sql_trabajos);



while ($ex_trabajos=mysqli_fetch_assoc($aux_trabajos)) { ?>

  <option value="<?php echo $ex_trabajos['id'];?>"><?php echo $ex_trabajos['categoria'];?></option>

<?php } ?>
