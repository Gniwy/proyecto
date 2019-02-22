$('#select_provincia').change(function(){

  var id_comunidad = $('#select_provincia').val();

  $.ajax({
    type:'GET',
    url:'modulos/buscador_avanzado/sql/buscador_localidad.php',
    data:{
      id_provincia:id_provincia
    },success: function(data){
      $('#select_localidad').html(data);
    }
  });

});
