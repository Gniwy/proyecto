$( "#btn_registro" ).click(function(){

  $.ajax({
    type:"GET",
    url:"modulos/menu_top/sql/registro.php",
    data:{
      nick:$('#nick').val(),
      password:$('#password').val()
    }, success:function(data){
      
    }
  });

});
