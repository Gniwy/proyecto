
$(".confirmar_edicion").hide();
$(".cancelar_edicion").hide();

$('.editar_usuario').click(function(){

  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(15);


  $('#nick_' + id_elemento).attr('contenteditable', true);
  $('#nick_' + id_elemento).css('background', '#fbe3a3');
  $('#email_' + id_elemento).attr('contenteditable', true);
  $('#email_' + id_elemento).css('background', '#fbe3a3');

  $("#confirmar_edicion_" + id_elemento).show();
  $("#cancelar_edicion_" + id_elemento).show();
  $("#editar_usuario_" + id_elemento).hide();
  $("#borrar_usuario_" + id_elemento).hide();
  $("#bloquear_usuario_" + id_elemento).hide();


});


$(".confirmar_edicion").click(function(){

  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(18);

  var nick = $('#nick_' + id_elemento).html();
  var email = $('#email_' + id_elemento).html();


  $.ajax({
    type:"GET",
    url:"sql/editar_usuario.php",
    data:{
      id_usuario:id_elemento,
      nick:nick,
      email:email
    },success:function(data){

      $('#contenido').load('mostrar_usuarios.php');

    }
  });

});

$(".cancelar_edicion").click(function(){

  var id_elemento= $(this).attr('id');

  id_elemento = id_elemento.substring(17);

  $("#confirmar_edicion_" + id_elemento).hide();
  $("#cancelar_edicion_" + id_elemento).hide();
  $("#editar_usuario_" + id_elemento).show();
  $("#borrar_usuario_" + id_elemento).show();
  $("#bloquear_usuario_" + id_elemento).show();

  $('#nick_' + id_elemento).attr('contenteditable', false);
  $('#email_' + id_elemento).attr('contenteditable', false);

  $('#nick_' + id_elemento).css('background', 'none');
  $('#email_' + id_elemento).css('background', 'none');

});
