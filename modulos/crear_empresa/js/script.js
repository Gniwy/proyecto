
// selector localidad
$('#select_provincia_crearEmp').change(function(){

  var id_provincia = $('#select_provincia_crearEmp').val();

  $.ajax({
    type:'GET',
    url:'sql/buscador_localidad.php',
    data:{
      id_provincia:id_provincia
    },success: function(data){

      $('#select_localidad_crearEmp').html(data);
    }
  });

});



// botones de proceso

var paso1 = document.getElementById('boton1');
var paso2 = document.getElementById('boton2');
var paso3 = document.getElementById('boton3');

// visiblilidad de cajas
var div1 = document.getElementById('paso1');
var div2 = document.getElementById('paso2');
var div3 = document.getElementById('paso3');


paso1.onclick = function()
 {
   if ($('#nombre').val() == "") {

     $('#nombre_req').css('display', 'block');

   }else {
     $('#nombre_req').css('display', 'none');
   }

   if ($('#select_localidad_crearEmp').val() <= 0) {

     $('#localidad_req').css('display', 'block');

   }else {
     $('#localidad_req').css('display', 'none');
   }

   if ($('#zona').val() == "") {

     $('#zona_req').css('display', 'block');

   }else {
     $('#zona_req').css('display', 'none');
   }

   if ($('#cp').val() == "" || isNaN($('#cp').val())) {

     $('#cp_req').css('display', 'block');

   }else {
     $('#cp_req').css('display', 'none');
   }
// problema en la verificación
   if( ($('#nombre').val() != "") && ($('#zona').val() != "") && ($('#select_localidad_crearEmp').val() != null) && (($('#cp').val() != "") && (!isNaN($('#cp').val()))) ){
     div2.style.display = "block";
     div1.style.display = "none";
     $("#img1").attr("src","img/data_enterprise.png");
     $("#img2").attr("src","img/gps_enterpriseFocus.png");
     $('#bandPaso1').val(1);
   }
 }

paso2.onclick = function()
 {
   if ($('#lat').val() == "") {

     $('#map_req').css('display', 'block');

   }else {
     $('#map_req').css('display', 'none');
   }

   if ($('#lng').val() == "") {

     $('#map_req').css('display', 'block');

   }else {
     $('#map_req').css('display', 'none');
   }
   if( $('#lat').val() != "" && $('#lng').val() != "" ){
     div3.style.display = "block";
     div2.style.display = "none";
     $("#img2").attr("src","img/gps_enterprise.png");
     $("#img3").attr("src","img/upload_enterpriseFocus.png");
   }
 }
paso3.onclick = function()
 {
   // variable puntuacion
   var puntuacion = $('#estrella').val();

   if (puntuacion!=0 && !isNaN(puntuacion)) {
    alert('Gracias por su colaboracion.');
    window.location.href = "../../index_vista2.php";
    // window.location.href = "../../index_vista2.php?lugar=&trabajo=null";
    }
 }


// sacando valores

  $('#boton1').click(function(){

    $('#span_nombre').html($('#nombre').val());
    $('#span_tipo').html($('#tipo').val());
    $('#span_zona').html($('#zona').val());
    $('#span_cp').html($('#cp').val());

  });

  // $('.filtro_estrella').mouseover(function(){
  //   var id_estrella = $(this).attr('id');
  //   id_estrella = id_estrella.substr(16);
  //
  //   for(var i=0;i<=id_estrella;i++){
  //     $('#filtro_estrella_'+i).attr('src','../../image/estrella_rellenada.png');
  //   }
  //
  // });
  // $('.filtro_estrella').mouseout(function(){
  //
  //   for(var i=0;i<5;i++){
  //     $('#filtro_estrella_'+i).attr('src','../../image/estrella_vacia.png');
  //   }
  //
  // });
  // $('.filtro_estrella').click(function(){
  //   var id_estrella = $(this).attr('id');
  //   id_estrella = id_estrella.substr(16);
  //   $('#filtro_estrella_'+id_estrella).attr('src','../../image/estrella_rellenada.png');
  //
  //   var valor = parseInt(id_estrella)+1;
  //
  //   $('#estrella').attr('value', valor);
  //
  //
  // })

  // Estrellas del comentario

  //variable que permite hacer las funciones mouseover y mouseout hasta que se selecciona la valoracion
  var clickeado=false;

  $('.filtro_estrella').mouseover(function(){
    if(!clickeado){
      var id_estrella = $(this).attr('id');
      id_estrella = id_estrella.substr(16);

      for(var i=1;i<=id_estrella;i++){
        $('#filtro_estrella_'+i).attr('src','../../image/estrella_rellenada.png');
      }
    }

  });

  $('.filtro_estrella').mouseout(function(){
    if(!clickeado){
      for(var i=1;i<=5;i++){
        $('#filtro_estrella_'+i).attr('src','../../image/estrella_vacia.png');
      }
    }

  });

  $('.filtro_estrella').click(function(){

    clickeado=true;

    var id_estrella = $(this).attr('id');
    id_estrella = id_estrella.substr(16);

    $('#estrella').val(id_estrella);

    for(var i=0;i<=id_estrella;i++){
      $('#filtro_estrella_'+i).attr('src','../../image/estrella_rellenada.png');
    }

    for(var i=(parseInt(id_estrella)+parseInt(1));i<=6;i++){
      $('#filtro_estrella_'+i).attr('src','../../image/estrella_vacia.png');
    }


    $('.filtro_estrella').css('border-bottom','');

  });

  // fin estrellas del comentario

//subida de valores a la bbdd

$('#boton3').click(function(){
  // variable puntuacion
  var puntuacion = $('#estrella').val();

  if (puntuacion!=0 && !isNaN(puntuacion)) {

    $.ajax({
      type:'POST',
      url:'../crear_empresa/sql/datosCrearEmpresa.php',
      data:{
        localidad:$('#select_localidad_crearEmp').val(),
        nombre:$('#nombre').val(),
        zona:$('#zona').val(),
        cp:$('#cp').val(),
        lat:$('#lat').val(),
        lng:$('#lng').val(),
        id_usuario:$('#id_usuario').val(),
        comentario:$('#comentario').val(),
        valoracion:$('#estrella').val()

      }, success: function(data){
        // alert(data);
      }
    });

  }else {
    alert('Es necesario que puntues la empresa');
    $('.filtro_estrella').css('border-bottom','solid 5px red');
  }

});
