$('#select_comunidad').change(function(){

  var id_comunidad = $('#select_comunidad').val();

  $.ajax({
    type:'GET',
    url:'modulos/buscador_principal/sql/consulta_provincia.php',
    data:{
      id_comunidad:id_comunidad
    },success: function(data){
      $('#select_provincia').html(data);
    }
  });

});
