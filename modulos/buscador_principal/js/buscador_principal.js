
$('#select_empresa_principal').load('modulos/buscador_principal/sql/select_empresa.php');
$('#select_lugar_principal').load('modulos/buscador_principal/sql/select_provincias.php');

// //ajax devuelta de valores
// $("#select_lugar").keyup(function(){
//
//   var texto = $(this).val();
//
//   $.ajax({
//     type: 'GET',
//     url: 'modulos/buscador_principal/sql/select_provincias.php',
//     contentType: "application/json",
//     dataType:'json',
//     data:{
//       texto:texto
//     },
//     success: function(data){
//
//        $( "#select_lugar" ).autocomplete({
//          source: data
//        });
//
//    }
//   });
// });
//To select country name
function selectCountry(val) {
  $("#select_lugar").val(val);
  $("#solucion_localidad").hide();
}

$('#btn_busqueda_principal').click(function(){

  var lugar = $('#select_lugar_principal').val();
  var empresa = $('#select_empresa_principal').val();

  location.href ="index_vista2.php?lugarp=" + lugar + "&empresa=" + empresa;

});
