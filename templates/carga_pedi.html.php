




<div class="container">

	<fieldset class="border p-2">
   <legend class="w-80 p-0 h-0 ">Solicitud de nutroterápico - Beneficiario:
    <?=$datosBenef['Nombres'] .' '. $datosBenef['Apellidos']?>
    </legend>

	<form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
		
	

<input type="hidden"name="Pedido[id_datos_benef]" id="id_datos_benef" value=<?=$datosBenef['id_datos_benef'] ?? ''?> 
>


	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_med">Diagnóstico médico</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[diag_med]" id="diag_med" required="required">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_nutri">Diagnóstico Nutricional</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[diag_nutri]" id="diag_nutri" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="peso">Peso</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="1" max="150" name="Pedido[peso]" id="peso" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="talla">Talla</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="40" max="210" name="Pedido[talla]" id="talla" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="variacion">Variación de peso</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="-20" max="20"  name="Pedido[variacion]" id="variacion" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="requ_calorias">Requerimiento calórico</label>
			<input class="form-control form-control-sm" type="number" step="5" min="50" max="7000" name="Pedido[requ_calorias]" id="requ_calorias" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="porc_aporte">Porcentaje del total a cubrir</label>
			<input class="form-control form-control-sm" type="number" step="1" min="5" max="100" name="Pedido[porc_aporte]" id="porc_aporte" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="nutro_ter">Nutroterápico</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[nutro_ter]" id="nutro_ter" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="suger_tm">Producto sugerido</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[suger_tm]" id="suger_tm" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="suger_tm">Via</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[via]" id="via" required="required">
	</div>
	
	<div class="col-sm-3">
			<label class="form-label-sm" for="presenta">Presentación</label>
			<input class="form-control form-control-sm" type="text"  name="Pedido[presenta]" id="presenta" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="gramos_dia">Gramos por día</label>
			<input class="form-control form-control-sm" type="number" step="1" min="10" max="500" name="Pedido[gramos_dia]" id="gramos_dia" required="required">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="env_pormes">Envases por mes</label>
			<input class="form-control form-control-sm" type="number" step="1" min="1" max="100"  name="Pedido[env_pormes]" id="env_pormes" required="required">
	</div>
	

	<div class="col-sm-4">
    	<label class="form-label-sm" for="prof_solicita">Profesional solicitante</label>
    	<input type="text" name="Pedido[prof_solicita]" id="prof_solicita" class="form-control form-control-sm" autocomplete="off" />
    	<input type="hidden" name="Pedido[usuari_id]" id="usuari_id" class="form-control form-control-sm" value="" autocomplete="off" />
		    </div>


	<div class="col-sm-4">
			
			<input  type="hidden" name="Pedido[fecha_ped]" value="<?=date('Y-m-d') ?? ''?> ">
		
	</div>

	<div class="col-sm-1">
			<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</div>

</form>
</fieldset>

</div>
<script type="text/javascript">

var auto_complete = new Autocomplete(document.getElementById('prof_solicita'), {
    data:<?php echo json_encode($data_usuario); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 


</script>
