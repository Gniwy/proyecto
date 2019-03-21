 
$('#select_provincia').change(function(){

  var id_provincia = $('#select_provincia').val();

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

$('#btn_busqueda_avanzado').click(function(){

  var lugar = $('#select_provincia').val();
  var empresa = $('#select_empresa_avanzado').val();
  var localidad = $('#select_localidad').val();

  location.href = "index_vista2.php?lugarp=" + lugar + "&empresa=" + empresa + "&lc=" + localidad;

});
