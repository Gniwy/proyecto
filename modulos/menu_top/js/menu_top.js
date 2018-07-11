
/*Hidden de los errores al cargar*/
$('#password_error').hide();
$('#nick_usado').hide();
$('#email_usado').hide();
$('#password_error_longitud').hide();


//al hacer modificaciones al email se eliminan los errores visuales (css y mensaje de error)
$('#email').keyup(function() {
  $('#email').css('background','none');
  $('#email_usado').hide();
  fallo=1;
});

//al hacer modificaciones al password se eliminan los errores visuales (css y mensaje de error)
$('#password, #password_2').keyup(function() {
  $('#password_error').hide();
  $('#password_error_longitud').hide();
  fallo=1;
});

//al hacer modificaciones al nick se eliminan los errores visuales (css y mensaje de error)
$('#nick').keyup(function() {
  $('#nick_usado').hide();
  fallo=1;
});

/* Boton registro */
$( "#btn_registro" ).click(function(){

  //fallo = si hay algun error en los valores introducidos para que no haga la insercion
  var fallo=1;

  var comprobar_email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
;

  //comprobacion de email correcto
  if(comprobar_email.test($('#email').val())){
    fallo=0;
  }else{
    $('#email').css('background','#ee6f6f');
    $('#email').focus();
    fallo=1;
  }

  //comprobacion de las password
  if($('#password').val()!=$('#password_2').val()){
    fallo=1;
    $('#password_error').show();
  }else{
    fallo=0;
    $('#password_error').hide();
  }

  //Comprobacion de las password >=6 caracteres
  if($('#password').val().length >= 6 ){
    fallo=0;
    $('#password_error_longitud').hide();
  }else{
    fallo=1;
    $('#password_error_longitud').show();
  }


  if(fallo==0){
    $.ajax({
      type:"GET",
      url:"modulos/menu_top/sql/registro.php",
      data:{
        nick:$('#nick').val(),
        password:$('#password').val(),
        email:$('#email').val()
      }, success:function(data){
        var nick_usado = $(data).filter('cliente').html();
        var email_usado = $(data).filter('email').html();

        //si existe el nick, se muestra el mensaje de error
        if(nick_usado=='existe'){
          $('#nick_usado').show();
          fallo=1;
        }

        if(email_usado=='existe'){
          $('#email_usado').show();
          fallo=1;
        }

        if(fallo==0){
          $('#modal_registro').modal('toggle');
        }

      }
    });
  }


});

/* Boton limpiar campos registro */

$('#btn_limpiar_campos_registro').click(function(){

  $('#modal_registro input').val('');
  $('#password_error').hide();
  $('#email').css('background','none');

});
