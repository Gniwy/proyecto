$( document ).ready(function() {

  $( "#btn_registro" ).click(function(){

    $.ajax({
      type:"GET",
      url:"menu_top/sql/registro.php",
      data:{
        nick:$('#nick').val(),
        password:$('#password').val()
      }, success:function(data){

      }
    });

  });

});
