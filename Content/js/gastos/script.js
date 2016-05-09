$(document).ready(function(){
	// eventos
		// change
			$(document).on("change",".cbVehiculo",function(){
				var frm = {
					idVehiculo: $(this).val()
				}
				var url = $(this).parents(".divCbVehiculo").find(".txtHdCbVehiculoChange").val();
				obtenerGastoVehiculo(url,frm);
			})
		// submit
			$(document).on("submit",".frmRepuesto",function(e){
				e.preventDefault();
				var frm = serializeSection($(this));
				frm.cbVehiculo = $(".cbVehiculo").val();
				console.log("frm a enviar es: ",frm);
				//ingresarRepuesto($(this).attr("action"),frm);
			})
})