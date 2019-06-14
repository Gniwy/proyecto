<?php include ('conexion/conexion.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="image/ico_logo.ico" />
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- hojas de estilo -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_vista2.css">
    <link rel="stylesheet" href="modulos/perfil_usuario/css/style_perfil_user.css">
    <script src="js/jquery.js"></script>

    <!-- jQuery 12.1.1 necessary jqueryUI -->
    <script src="js/jquery-ui.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/index.js"></script>

  </head>
  <body>
    <section>
      <?php include"modulos/menu_top/menu_top.php" ?>
    </section>


<input type="text" name="" id="id_user" value="<?php echo $_SESSION['id_usuario']; ?>" hidden>

    <div class="body_perfil_user container">

      <section class="row">

        <div class="card">
          <div class="form">
            <div class="form-row">
              <div class="form-group col-12">
                <label for="inputNick">Nombre/Nick</label>

                <?php

                $id_usuario=$_SESSION['id_usuario'];
                $sql_nombre_cliente="SELECT * FROM cliente WHERE id=$id_usuario";
                $aux_nombre_cliente=mysqli_query($link, $sql_nombre_cliente);
                $ex_nombre_cliente=mysqli_fetch_assoc($aux_nombre_cliente);
                $usuario=$ex_nombre_cliente['nick'];

                 ?>

                <input type="text" class="form-control" id="newNick" value="<?php echo $usuario; ?>">
                <label class="required" id="nick_req">Campo obligatorio</label>
              </div>
              <div class="form-group col-12">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="newPassword" placeholder="********">
                <label class="required" id="pwd_req">Campo obligatorio</label>
              </div>
              <div class="form-group col-12">
                <label for="inputPassword">Contraseña</label>
                <input type="password" class="form-control" id="comprobarPassword" placeholder="********">
                <label class="required" id="pwd_req2">Los campos no coinciden</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aceptarTerminos">
                <label class="form-check-label" for="gridCheck">Aceptar terminos</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" id="nuevosDatos">Enviar</button>
          </div>
        </div>

      </section>

    </div>


          <!-- Fondo menu principal -->
          <div class='ripple-background'>
            <div class='circle xxlarge shadow1'></div>
            <div class='circle xlarge shadow2'></div>
            <div class='circle large shadow3'></div>
            <div class='circle medium shadow4'></div>
            <div class='circle small shadow5'></div>
          </div> <!-- Fin de ripple -->


<input type="hidden" id="band_perfil_user" name="" value="0">
    <footer>
      <?php include "modulos/footer/footer.php"; ?>
    </footer>
    <!-- Modal registro-->
    <div id="div_modal_registro" class="pointer"><?php include "modales/modal_registro.php"; ?></div>

    <!-- Modal login-->
    <div id="div_modal_login" class="pointer"><?php include "modales/modal_login.php"; ?></div>


    <!-- script pagina -->
    <script type="text/javascript" src="modulos/perfil_usuario/js/perfil_usuario.js"></script>

  </body>
</html>
