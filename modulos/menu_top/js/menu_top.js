
/*Hidden de los errores al cargar*/
function hidden_errores_modal_registro(){
  $('#password_error').hide();
  $('#nick_usado').hide();
  $('#email_usado').hide();
  $('#password_error_longitud').hide();
}

function hidden_errores_modal_login(){
  $('#error_login').hide();
}

hidden_errores_modal_registro();
hidden_errores_modal_login();


//////////////////////////////// Modal registro ////////////////////////////////////

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
  var fallo_email=1;
  var fallo_password=1;
  var fallo=0;

  var comprobar_email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
;

  //comprobacion de email correcto
  if(comprobar_email.test($('#email').val())){
    fallo_email=0;
  }else{
    $('#email').css('background','#ee6f6f');
    $('#email').focus();
    fallo_email=1;
  }

  //comprobacion de las password
  if($('#password').val()!=$('#password_2').val()){
    fallo_password=1;
    $('#password_error').show();
  }else{

    fallo_password=0;
    $('#password_error').hide();

    //Comprobacion de las password >=6 caracteres
    if($('#password').val().length >= 6 ){
      fallo_password=0;
      $('#password_error_longitud').hide();
    }else{
      fallo_password=1;
      $('#password_error_longitud').show();
    }

  }

  if(fallo_email==0 && fallo_password==0){
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
        var idcliente = $(data).filter('idcliente').html();

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

          $.ajax({
            type:"GET",
            url:"modulos/menu_top/sql/enviar_correo_verificacion.php",
            data:{
              idcliente:idcliente
            }
          });

          alert('Te hemos mandado un correo de verificacion.');
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

//////////////////////////////// Fin modal registro ////////////////////////////////////



//////////////////////////////// Modal login ////////////////////////////////////

$('#nick_email_login, #password_login').keyup(function() {

  $('#error_login').hide();

});


$('#btn_iniciar_sesion').click(function(){

  $.ajax({
    type:"GET",
    url:"modulos/menu_top/sql/login.php",
    data:{
      nick:$('#nick_email_login').val(),
      password:$('#password_login').val()
    }, success:function(data){
      if(data=="correcto"){
        location.reload(true);
      }else if(data=="bloqueado"){
        alert('Tu cuenta no esta verificada, comprueba tu correo. En cualquier otro caso, contacta con nosotros.');
      }else{
        alert(data);
      }

    }
  });

});


//////////////////////////////// Fin modal login ////////////////////////////////////
