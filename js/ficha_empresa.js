


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


});

$('.filtro_estrella').mouseout(function(){

  for(var i=0;i<5;i++){
    $('#filtro_estrella_'+i).attr('src','image/estrella_vacia.png');
  }

});

$('.comentario_estrella').mouseover(function(){
  var id_estrella = $(this).attr('id');
  id_estrella = id_estrella.substr(20);
  console.log(id_estrella);
  for(var i=0;i<=id_estrella;i++){
    $('#comentario_estrella_'+i).attr('src','image/estrella_rellenada.png');
  }


});

$('.comentario_estrella').mouseout(function(){

  for(var i=0;i<5;i++){
    $('#comentario_estrella_'+i).attr('src','image/estrella_vacia.png');
  }

});
