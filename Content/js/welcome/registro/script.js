$(document).ready(function(){
	// eventos
		// submit
			$(document).on("submit",".frm",function(e){
				e.preventDefault();
				console.log("frm",frm);
				var frm = serializeSection($(this));
				registrar(frm);
				//console.log("frm",frm);
			})
})