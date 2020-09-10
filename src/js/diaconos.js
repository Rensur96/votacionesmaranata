$(document).ready(function(){
 

    $("#btn-votar").click(function() {
        var nominados = [];
        $("input[type=checkbox]").each(function(){
			if($(this).is(":checked"))
				nominados.push($(this).val());
		});
        $.post("http://192.168.0.13/votacionesmaranata/votar",
        { 
			'nomina': 'diaconos',
            'nominados[]': nominados
        },
        function(data, status){
        	if(status =='success' & data=='1'){
        	    M.toast( {html: 'Votaciones guardadas', displayLength:1000, completeCallback: function(){
					window.location="http://192.168.0.13/votacionesmaranata/diaconizas";
				}});
	
        	} else{
        		M.toast( {html: 'Ocurrrio un error al procesar los votos 1!'});
        	}
        });
	});
	// Evento que se ejecuta al pulsar en un checkbox
	$("input[type=checkbox]").change(function(){
 
		// Cogemos el elemento actual
		var elemento=this; //Elemtno checkbox
		var contador=0; //contador de elementos seleccionados
		var cantidadMaxima=9; //limite de checkbox seleccionables
 
		// Recorremos todos los checkbox para contar los que estan seleccionados
		$("input[type=checkbox]").each(function(){
			if($(this).is(":checked"))
				contador++;
		});
        // Comprovamos si supera la cantidad máxima indicada
		if(contador>cantidadMaxima)
		{
            M.toast({html: 'Solamente puedes seleccionar 9',displayLength:1200})
			// Desmarcamos el ultimo elemento
			$(elemento).prop('checked', false);
			contador--;
		}
        if(contador == cantidadMaxima){
            $("#btn-votar").prop('disabled', false);
        } else{
            $("#btn-votar").prop('disabled', true);
        }
		$("#seleccionados").html(contador);
    });
    
});
