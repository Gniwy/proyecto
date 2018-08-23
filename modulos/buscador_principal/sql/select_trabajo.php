<?php
require_once "../../../conexion/conexion.php";


$sql_trabajos="SELECT * FROM categorias_trabajos";
$aux_trabajos=mysqli_query($link,$sql_trabajos);


?> <option disabled selected style="color:rgb(184, 182, 181)grey;">Elige una categoria</option> <?php
while ($ex_trabajos=mysqli_fetch_assoc($aux_trabajos)) { ?>

  <option value="<?php echo $ex_trabajos['id'];?>"><?php echo $ex_trabajos['categoria'];?></option>

<?php } ?>
