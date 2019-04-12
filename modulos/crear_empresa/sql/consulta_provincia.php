<?php

include_once '../../conexion/conexion.php';

  // barra selectora de la provincia
  $consulta = 'SELECT * FROM provincia WHERE 1 ORDER by nombre';
  $sql = mysqli_query($link,$consulta);

?>
<?php
  while ($row = mysqli_fetch_assoc($sql))
  {
    ?>

    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>

    <?php
  }

?>
