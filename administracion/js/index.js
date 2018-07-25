/*Hidden de los errores al cargar*/
function hidden_errores_login(){
  $('#error_login').hide();
}

hidden_errores_login();


$('#nick, #password').keyup(function() {
  hidden_errores_login();
});


$('#btn_login').click(function(){

  var fallo=1;

  $.ajax({
    type:"GET",
    url:"sql/comprobar_sesion.php",
    data:{
      nick:$('#nick').val(),
      password:$('#password').val()
    }, success:function(data){

      if(data=='correcto'){
        $('#error_login').hide();
        fallo=0;
      }else{
        fallo=1;
        $('#error_login').show();
      }

      if(fallo==0){
        location.reload(true);
      }

    }
  });


});
