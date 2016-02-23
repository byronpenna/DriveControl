$(document).ready(function(){
	// eventos
		// submit
			$(document).on("submit",".frm",function(e){
				e.preventDefault();
				var frm = serializeSection($(this));

				registrar(frm)
				console.log("frm",frm);
			})
})