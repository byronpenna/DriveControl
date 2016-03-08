$(document).ready(function(){
	// eventos
		// submit
			$(document).on("submit",".frm",function(e){
				e.preventDefault();
				console.log("frm",frm);
				var frm = serializeSection($(this));
				var val = test("(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$",frm.txtPass);
				if(val){
					registrar(frm);	
				}
				else{
					printMessage($(".divMessage"),"la contraseña debe tener letras, digitos, y al menos 8 caracteres",false)
				}
				//console.log("frm",frm);
			})
})