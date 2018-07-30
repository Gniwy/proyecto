

//ajax devuelta de valores
$("#select_lugar").keyup(function(){

  var texto = $(this).val();

  $.ajax({
    type: 'GET',
    url: 'modulos/buscador_principal/sql/select_provincias.php',
    contentType: "application/json",
    dataType:'json',
    data:{
      texto:texto
    },
    beforeSend: function(){
			$("#select_lugar").css("background","#FFF url('https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif') no-repeat 165px");
		},
    success: function(data){
      //alert(data.toSource());
      //alert(data);
      //alert(JSON.parse(data));
  
      alert(eval(data));
      // var availableTags = JSON.parse(data);
      //
      //
      // $( "#select_lugar" ).autocomplete({
      //   source: availableTags
      // });


     // $("#solucion_localidad").show();
     // $("#solucion_localidad").html(data);
     // $("#select_lugar").css("background","#FFF");
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
