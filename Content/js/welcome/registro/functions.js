function registrar(frm){
	var url = $(".txtHdUrl").val()+"/Welcome/ajax_registrar";
	console.log("url es",url);
	actualizarCatalogo(url,frm,function(data){
		console.log("la data es",data);
		var data = jQuery.parseJSON(data);
		if(data.estado){
			alert("Regitrado exitosamente");
			window.location = $(".txtHdRetorno").val();
		}else{
			alert("Ocurrio un error, vuelve a intentarlo");
		}
	},function(){
		console.log()
		$(".btnRegistro").prop("disabled",true);
		$(".divLoading").empty().append("<img class='imgLoading' src='"+$(".txtHdBaseUrl").val()+"Content/img/gifload.gif"+"'>");

	});
}	