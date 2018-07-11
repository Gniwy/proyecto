
$('#password_error').hide();


$('#email').keyup(function() {
  $('#email').css('background','none');
});
$('#password, #password_2').keyup(function() {
  $('#password_error').hide();
});

/* Boton registro */
$( "#btn_registro" ).click(function(){

  var fallo=0;
  var comprobar_email = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
;

  if(comprobar_email.test($('#email').val())){
    fallo=1;
  }else{
    $('#email').css('background','#ee6f6f');
    $('#email').focus();
  }

  if($('#password').val()!=$('#password_2').val()){
    fallo=1;
    $('#password_error').show();
  }else{
    $('#password_error').hide();
    $('#password').focus();
  }

  if(fallo=0){
    $.ajax({
      type:"GET",
      url:"modulos/menu_top/sql/registro.php",
      data:{
        nick:$('#nick').val(),
        password:$('#password').val()
      }, success:function(data){
        $('#modal_registro').modal('toggle');
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
