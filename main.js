(function(){

var buscar_datos = function(consulta) {
    $.ajax({
        url: 'buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta) {
        $("#dato").html(respuesta);
    })
    .fail(function (){
        console.log("error")
    })
}

setInterval(buscar_datos,1000);

}())

