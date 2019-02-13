
$(document).ready(function() {
    $("#nuevosDatos").on("click", function() {
        var condiciones = $("#aceptarTerminos").is(":checked");
        if (!condiciones) {
            alert("Debe aceptar las condiciones");
            event.preventDefault();
        }
    });
});

if (acctionTerminos = true) {

  $.ajax({

    type:"GET",
    url:"sql/updateUser.php",
    data:{
      nick:$("#aceptarTerminos").val()
    }, success:function(data){
            alert(data);
    }

  });

}
