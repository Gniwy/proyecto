//ajax devuelta de valores
$("#select_lugar").keyup(function(){
  $.ajax({
    type: 'GET',
    url: 'modulos/buscador_principal/sql/buscador_principal.php',
    data: 'keyword='+$(this).val(),
    beforeSend: function(){
			$("#select_lugar").css("background","#FFF url('https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif') no-repeat 165px");
		},
    success: function(data){
     $("#solucion_localidad").show();
     $("#solucion_localidad").html(data);
     $("#select_lugar").css("background","#FFF");
   }
  });
});
//To select country name
function selectCountry(val) {
$("#select_lugar").val(val);
$("#solucion_localidad").hide();
}

// // trabajos disponibles
//   $( function() {
//       var availableTags = [
//         "Abogado",
//         "Administrador",
//         "Camarero",
//         "Carpintero"
//       ];
//       $( "#select_trabajo" ).autocomplete({
//         source: availableTags
//       });
//     } );
