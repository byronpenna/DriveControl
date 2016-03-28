$(document).ready(function(){
	// eventos
		// submit
			$(document).on("submit",".frm",function(e){
				e.preventDefault();
				var frm = serializeSection($(this));
				console.log("frm",frm);
				//var val = test("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$",frm.txtPass);
				/*var str = "The best things in life are free";
				var patt = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$");
				var res = patt.test(frm.txtPass);*/
				var patt = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/;
				var result = patt.test(frm.txtPass);
				console.log(result);
				if(result){
					registrar(frm);	
				}
				else{
					printMessage($(".divMessage"),"la contraseña debe tener letras, digitos, y al menos 8 caracteres",false)
				}
				//console.log("frm",frm);
			})
})