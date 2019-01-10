<form action="sql/consulta_buscador.php" method="post" class="form-inline col-centrada col-12">
  <div class="col-12 img"></div>
  <div class="row form-group col-10 mb-2">
    <select class="col-4 col-sm-4 col-md-4 form-control" name="comunidad" id="select_comunidad">
      <option value="">Todas las comunidades</option>
      <?php
      // barra selectora de la comunidades
        $consulta = "SELECT * FROM `comunidades` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['id'].'">'.$row['comunidad'].'</option>';
        }
       ?>
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="provincia" id="select_provincia">
      <option value="">Todas las provincias</option>
    </select>
    <select class="col-4 col-sm-4 col-md-4 form-control" name="localidad">
      <option value="">Todas las localidades</option>
      <?php
      // barra selectora de la localidades
        $consulta = "SELECT * FROM `localidad` WHERE 1";
        $sql = mysqli_query($link,$consulta);

        while ($row = mysqli_fetch_assoc($sql))
        {
          echo '<option value="'.$row['cp'].'">'.$row['nombre'].'</option>';
        }
       ?>
    </select>
    <input type="text" class="col-12 form-control" name="trabajo" id="trabajo" placeholder="Ej: Carrefour">
  </div>
  <div class="col-2">
    <input type="submit" name="enviar" value="Buscar" class="btn btn-primary mb-2">
  </div>
  <div class="col-md-12 text-center">
    ¿No encuentras la empresa que buscas?
    <a href="modulos/crear_empresa/crear_empresa.php"><button type="button" class="btn-warning btn" name="button" id="btn_modal_empresa"> Creala</button></a>
  </div>
</form>
