
$('#email').keyup(function() {
  $('#email').css('background','none');
});
$('#password, #password_2').keyup(function() {
  $('#password').css('background','none');
  $('#password_2').css('background','none');
});

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

  if($('#password').val()!=$('#password_2').val() || $('#password').length()<6){
    fallo=1;
  }else{
    $('#password').css('background','#ee6f6f');
    $('#password_2').css('background','#ee6f6f');
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
