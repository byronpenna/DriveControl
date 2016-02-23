$(document).ready(function(){
	// eventos
		// click
			$(document).on("submit","#frmInvitado",function(e){
				e.preventDefault();
				var frm = serializeSection($(this));
				frmInvitado(frm);
			})
})