


$( ".progressbar" ).progressbar({
  value: 600,
  max: 1024,
  create: function(event, ui) {$(this).find('.ui-widget-header').css({'background-color':'green'})}
});


$('.filtro_estrella').mouseover(function(){

  var id_estrella = $(this).attr('id');
  id_estrella = id_estrella.substr(16);

  for(var i=0;i<=id_estrella;i++){
    $('#filtro_estrella_'+i).attr('src','image/estrella_rellenada.png');
  }

  var id_empresa = $('#hidden_empresa').val();
  valoracion=parseInt(id_estrella)+parseInt(1);
  $.ajax({
    type:'post',
    url:'title_comentarios_estrellas.php',
    data:{
      id_empresa:id_empresa,
      valoracion:valoracion
    },success:function(data){
      $('#filtro_estrella_'+id_estrella).attr('title',data);
    }
  });


});

$('.filtro_estrella').mouseout(function(){

  for(var i=0;i<5;i++){
    $('#filtro_estrella_'+i).attr('src','image/estrella_vacia.png');
  }

});
