$(document).ready(function () {
     $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
     });
 });
function solo_letras(id,boton) {
	var cadena_inicial = $('#'+id).val();
	//console.log(cadena_inicial);
	var expreg = /[^A-Za-zñÑ-áéíóúÁÉÍÓÚ\s\t-]/;
	if (!expreg.test(cadena_inicial)) {
		$('#'+id).css('border-color','#127914');
        $('#'+boton).attr("disabled", false);
		
	} else{
		$('#'+id).css('border-color','#af1a1a');
        $('#'+boton).attr("disabled", true);
	}
}
function solo_numeros (id) {
    //alert("numeros");
    var valor_inicial = $('#'+id).val();
    var valor_numeros = valor_inicial.replace(/[^0-9]/g,'');
    $('#'+id).val(valor_numeros); 
}