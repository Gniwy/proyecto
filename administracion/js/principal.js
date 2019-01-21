
//boton superior para mostrar los usuarios
$('#mostrar_usuarios').click(function(){

  $('#welcome').css('display', 'none');

  $('#contenido').css('visibility', 'visible');
  //cargamos dentro del div contenido la parte de usuarios
  $('#contenido').load('contenido_usuarios.php');


});


//boton superior para mostrar las empresas
$('#mostrar_empresas').click(function(){

  $('#welcome').css('display', 'none');

  $('#contenido').css('visibility', 'visible');
  //cargamos dentro del div contenido la parte de las empresas
  $('#contenido').load('contenido_empresas.php');


});
