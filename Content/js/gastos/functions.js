function ingresarRepuesto(url,frm){
	actualizarCatalogo(url,frm,function(data){
		var data = jQuery.parseJSON(data);
		if(data.estado){
			alert("agregado correctamente");
			window.location.reload(true);	
		}
	})
}
function obtenerGastoVehiculo(url,frm){
	actualizarCatalogo(url,frm,function(data){
		var data = jQuery.parseJSON(data);
		if(data.estado){
			console.log(data);
			llenarTablaRepuestos(data.repuestos);
			$(".lbTotalGasto").empty().append(data.total.total)
		}else{
			alert("Error");
		}
	})
}

function llenarTablaRepuestos(repuestos){
	if(repuestos !== undefined && repuestos != null && repuestos.length > 0){
		var tbody = "";
		$.each(repuestos,function(i,repuesto){
			tbody += "\
				<tr>\
					<td class='hidden'>"+repuesto.idVehiculoRepuesto+"</td>\
					<td>"+repuesto.nombre+"</td>\
					<td>"+repuesto.monto+"</td>\
					<td>"+repuesto.detalles_adicionales+"</td>\
					<td>"+repuesto.fecha+"</td>\
					<td>"+repuesto.local+"</td>\
				</tr>\
			";
		});
		$(".tbRepuestos").empty().append(tbody);
	}
}