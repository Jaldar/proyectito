/*$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>Ingrese el Número del documento de identidad</p>');
})*/

function buscar() {
    var textoBusqueda = $("input#ced").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {textoBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
    };
/*$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'conex.php' ,
		type: 'RESQUEST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#cedula").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#cedula', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});*/