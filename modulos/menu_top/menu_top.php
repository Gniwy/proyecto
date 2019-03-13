<?php

session_start();

?>
    <link rel="stylesheet" href="modulos/menu_top/css/menu-top.css">
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="col-7 col-sm-12 text-left navbar-brand" id="titulo" href="http://localhost/proyecto/index.php"><img src="image/logo_ireference.png" class="" width=200 alt="logo"></a>
    <button class="col-1 col-sm-1 offset-10 navbar-toggler" id="botonDropdown" type="button" data-toggle="collapse" data-target="#navbar_sesion_login" aria-controls="navbar_sesion_login" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(!isset($_SESSION['id_usuario'])){ ?>
    <div class="col-5 offset-8 col-md-3 offset-md-8 collapse navbar-collapse contenidoPerfil" id="navbar_sesion_login">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle cuenta" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mi cuenta <i class="fas fa-user"></i>
            </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="perfilOpc">
            <a class="dropdown-item" data-toggle="modal" data-target="#modal_login">Login</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#modal_registro">Registrate</a>
          </div>
        </li>
      </ul>
    </div>
  <?php }else{?>

    <div class="col-5 col-md-3 offset-md-8 collapse navbar-collapse contenidoPerfil" id="navbar_sesion_login">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hola, <?php echo $_SESSION['nick_usuario'];?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="modulos/perfil_usuario/perfil_usuario.php">Cuenta</a>
            <a class="dropdown-item" href="modulos/menu_top/sql/cerrar_sesion.php">Cerrar sesion</a>
          </div>
        </li>
      </ul>
    </div>
  <?php }?>
  </nav>
</header>

<!-- Modal registro-->
<div id="div_modal_registro"><?php @include "modales/modal_registro.php"; ?></div>

<!-- Modal login-->
<div id="div_modal_login"><?php @include "modales/modal_login.php"; ?></div>

<script type="text/javascript" src="modulos/menu_top/js/menu_top.js"></script>
