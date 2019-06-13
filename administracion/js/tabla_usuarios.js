//se ocultan los botones de confirmar y cancelar de todas las filas al cargar la tabla
$(".confirmar_edicion").hide();
$(".cancelar_edicion").hide();

//editar usuario
$('.editar_usuario').click(function(){

  //sacamos el id del usuario
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(15);

  //desabilitamos el resto de botones de las filas que no correspondan
  $('.fila_usuario button').attr('disabled','true');
  $('.fila_usuario').css('opacity',0.5);

  //añadimos las propiedades necesarias para los elementos de dicha fila
  $('#usuario_' + id_elemento + ' button').removeAttr('disabled');
  $('#usuario_' + id_elemento).css('opacity',1);
  $('#nick_' + id_elemento).attr('contenteditable', true);
  $('#nick_' + id_elemento).css('background', '#fbe3a3');
  $('#email_' + id_elemento).attr('contenteditable', true);
  $('#email_' + id_elemento).css('background', '#fbe3a3');


  //mostramos los botones de confirmar la edicion y de cancelar de dicha fila
  $("#confirmar_edicion_" + id_elemento).show();
  $("#cancelar_edicion_" + id_elemento).show();

  //ocultamos los botones editar, borrar y bloquear de dicha fila
  $("#editar_usuario_" + id_elemento).hide();
  $("#borrar_usuario_" + id_elemento).hide();
  $("#bloquear_usuario_" + id_elemento).hide();
  $("#desbloquear_usuario_" + id_elemento).hide();



});


//confirmar edicion del usuario
$(".confirmar_edicion").click(function(){

  //sacamos el id del usuario
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(18);

  //sacamos cual es el nick y el email del usuario a modificar
  var nick = $('#nick_' + id_elemento).html();
  var email = $('#email_' + id_elemento).html();

  //por ajax hacemos la peticion al archivo php que se encarga de hacer la modificacion
  $.ajax({
    type:"GET",
    url:"sql/editar_usuario.php",
    data:{
      id_usuario:id_elemento,
      nick:nick,
      email:email
    },success:function(data){

      //Se vuelve a cargar la tabla de usuarios
      $('#contenido').load('contenido_usuarios.php');

    }
  });

});


//cancelar edicion
$(".cancelar_edicion").click(function(){

  $('#tabla_usuarios').load('tabla_usuarios.php');

});

$('.bloquear_usuario').click(function(){

  //sacamos el id del usuario
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(17);

  $.ajax({
    type:"GET",
    url:"sql/bloquear_usuario.php",
    data:{
      id_usuario:id_elemento
    },success:function(data){

      //Se vuelve a cargar la tabla de usuarios
      $('#contenido').load('contenido_usuarios.php');

    }
  });


});
$('.desbloquear_usuario').click(function(){

  //sacamos el id del usuario
  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(20);

  $.ajax({
    type:"GET",
    url:"sql/desbloquear_usuario.php",
    data:{
      id_usuario:id_elemento
    },success:function(data){

      //Se vuelve a cargar la tabla de usuarios
      $('#contenido').load('contenido_usuarios.php');

    }
  });


});
