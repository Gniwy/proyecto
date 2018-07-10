<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/css/header.css">
  <link rel="stylesheet" href="style/css/footer.css">
  <link rel="stylesheet" href="style/css/master.css">

</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="col-8 col-sm-10 text-center navbar-brand" href="">Nombre del proyecto</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="col-4 col-sm-2 collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mi cuenta
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Login</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#modalregistro">Registrate</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
        <!-- error 1 -->
  <!-- Button trigger modal -->
  <a class="dropdown-item" data-toggle="modal" data-target="#modalregistro" hidden="hidden" href="#">Registrate</a>

  <!-- Modal
  <div class="modal fade" id="modalregistro" tabindex="-1" role="dialog" aria-labelledby="modalregistrolabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title col-md-9 text-left" id="modalregistrolabel">Registro</h4>
          <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <th>Nick: </th>
              <th>Contraseña: </th>
            </tr>
            <tr>
              <td><input type="text" name="" placeholder="Nickname" value=""></td>
              <td><input type="text" name="" placeholder="****" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="button" class="btn btn-primary" name="button" data-dismiss="modal">Registrarme</button></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>-->
  <!-- Contenido principal -->
  <section class="container-fluid">
    <div class="row">
      <form action="vista1.html" class="form-inline col-centrada">
        <div class="col-12 img"></div>
        <div class="row form-group col-9 mx-sm-3 mb-2">
          <input type="text" class="col-6 col-sm-6 col-md-6 form-control" id="localidad" placeholder="Ej: Malaga">
          <input type="text" class="col-6 col-sm-6 col-md-6 form-control" id="trabajo" placeholder="Ej: Carrefour">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>
    </div>
  </section>

  <!--FOOTER-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h5><i class="fa fa-road"></i> Proyecto</h5>
          <div class="row">
            <div class="col-6">
              <ul class="list-unstyled">
                <li><a href="">Product</a></li>
                <li><a href="">Benefits</a></li>
                <li><a href="">Partners</a></li>
                <li><a href="">Team</a></li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="list-unstyled">
                <li><a href="">Documentation</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Legal Terms</a></li>
                <li><a href="">About</a></li>
              </ul>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
          </ul>
          <br>
        </div>
        <div class="col-md-2">
          <h5 class="text-md-right">Contactanos</h5>
          <hr>
        </div>
        <div class="col-md-5">
          <form>
            <fieldset class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
            </fieldset>
            <fieldset class="form-group">
              <textarea class="form-control" id="exampleMessage" placeholder="mensaje"></textarea>
            </fieldset>
            <fieldset class="form-group text-xs-right">
              <button type="button" class="btn btn-secondary-outline btn-lg">Enviar</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div id="modal_registro" class="modal fade" role="dialog" aria-labelledby="modal_registro_label" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title col-md-9 text-left" id="modal_registro_label">Registro</h4>
          <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
        </div>
        <div class="modal-body">

          <table>
            <tr>
              <th>Nick: </th>
              <th>Contraseña: </th>
            </tr>
            <tr>
              <td><input type="text" name="" placeholder="Nickname" id="nick" value=""></td>
              <td><input type="text" name="" placeholder="****" id="password" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td> <button type="button" class="btn btn-primary" name="button" id="btn_registro" data-dismiss="modal">Registrarme</button></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- fin modal -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="style/jquery-3.3.1.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="style/bootstrap/js/bootstrap.js"></script>

  <!-- js independiente (registro) -->
  <script type="text/javascript">
    $( document ).ready(function() {

      $( "#btn_registro" ).click(function(){

        $.ajax({
          type:"GET",
          url:"php/registro.php",
          data:{
            nick:$('#nick').val(),
            password:$('#password').val()
          }, success:function(data){
            alert(data);
          }
        });

      });


    });
  </script>
</body>

</html>
