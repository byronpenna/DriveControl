$(document).ready(function(){
	// eventos
		// click
			$(document).on("submit","#frmInvitado",function(e){
				e.preventDefault();
				var frm = serializeSection($(this));
				var val = test("(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$",frm.txtPass);
				if(val){
					frmInvitado(frm);	
				}else{
					printMessage($(".divMessage"),"Error en la validacion de la contraseña",false)
				}
				
			})
})