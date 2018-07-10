<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/master.css">

</head>

<body>
  <!-- HEADER -->
  <?php include "modulos/menu_top/menu_top.php"; ?>

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

  <!-- Modal registro-->
  <?php include "modales/modal_registro.php" ?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

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

          }
        });

      });

    });
  </script>
</body>

</html>
