<?php
require_once "../../../conexion/conexion.php";


$sql_empresa="SELECT id, nombre FROM empresa GROUP BY nombre";
$aux_empresa=mysqli_query($link,$sql_empresa);


?> <option value="0" selected style="color:rgb(184, 182, 181)grey;">Elige una empresa</option> <?php
while ($ex_empresa=mysqli_fetch_assoc($aux_empresa)) { ?>

  <option value="<?php echo $ex_empresa['id'];?>"><?php echo $ex_empresa['nombre'];?></option>

<?php } ?>
