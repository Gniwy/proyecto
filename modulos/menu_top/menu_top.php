<?php

session_start();

?>
<!-- <style media="screen">
  #navbarSupportedContent{
    float: right;
    z-index: 999;
  }
</style> -->

<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="col-12 col-sm-12 text-center navbar-brand" href="">Nombre del proyecto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_sesion_login" aria-controls="navbar_sesion_login" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(!isset($_SESSION['id_usuario'])){ ?>
    <div class="col-4 col-sm-2 collapse navbar-collapse" id="navbar_sesion_login">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mi cuenta
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" data-toggle="modal" data-target="#modal_login">Login</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#modal_registro">Registrate</a>
          </div>
        </li>
      </ul>
    </div>
  <?php }else{?>

    <div class="col-md-3 offset-md-8 collapse navbar-collapse" style="position:absolute;" id="navbar_sesion_login">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hola, <?php echo $_SESSION['nick_usuario'];?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Cuenta</a>
            <a class="dropdown-item" href="modulos/menu_top/sql/cerrar_sesion.php">Cerrar sesion</a>
          </div>
        </li>
      </ul>
    </div>
  <?php }?>
  </nav>
</header>
