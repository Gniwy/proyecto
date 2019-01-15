
// Visibilidad


var paso1 = document.getElementById('boton1');
var paso2 = document.getElementById('boton2');
var paso3 = document.getElementById('boton3');

var div1 = document.getElementById('paso1');
var div2 = document.getElementById('paso2');
var div3 = document.getElementById('paso3');

paso1.onclick = function()
 {
    div2.style.display = "block";
    div1.style.display = "none";
 }
paso2.onclick = function()
 {
    div3.style.display = "block";
    div2.style.display = "none";
 }
// paso3.onclick = function()
//  {
//   // alert('Gracias por su colaboracion.');
//   // window.location.href = "../../index_vista2.php";
//   window.location.href = "../crear_empresa/sql/datosCrearEmpresa.php";
//  }


// sacando valores

  $('#boton1').click(function(){

    $('#span_nombre').html($('#nombre').val());
    $('#span_tipo').html($('#tipo').val());
    $('#span_zona').html($('#zona').val());
    $('#span_cp').html($('#cp').val());

  });

//subida de valores a la bbdd

  $('#boton3').click(function(){

    $.ajax({
      type:"POST",
      url:"../crear_empresa/sql/datosCrearEmpresa.php",
      data:{
        nombre:$('#nombre').val(),
        tipo:$('#tipo').val(),
        zona:$('#zona').val(),
        cp:$('#cp').val(),
        lat:$('#lat').val(),
        lng:$('#lng').val(),
        comentario:$('#comentario').val()

      }, success: function(data){
        alert(data);
          //window.location.href = "../crear_empresa/sql/datosCrearEmpresa.php";
      }
    });

  });
