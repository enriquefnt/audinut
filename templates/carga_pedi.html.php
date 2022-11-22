<p>
Id <?=$beneficiario['id_datos_benef'] ?? ''?>
</p>


<div class="container">

	<fieldset class="border p-2">
   <legend class="w-50 p-0 h-25 ">Solicitud de nutroterápico</legend>

	<form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
		
	

<input type="hidden"name="id_datos_benef" id="id_datos_benef" value=<?=$beneficiario['id_datos_benef'] ?? ''?> 
>


	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_med">Diagnóstico médico</label>
			<input class="form-control form-control-sm" type="text"  name="diag_med" id="diag_med" required="required">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_nutri">Diagnóstico Nutricional</label>
			<input class="form-control form-control-sm" type="text"  name="diag_nutri" id="diag_nutri" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="peso">Peso</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="1" max="150" name="peso" id="peso" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="talla">Talla</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="40" max="210" name="talla" id="talla" required="required">
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="variacion">Variación de peso</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="-20" max="20"  name="variacion" id="variacion" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="requ_calorias">Requerimiento calórico</label>
			<input class="form-control form-control-sm" type="number" step="50" min="100" max="7000" name="requ_calorias" id="requ_calorias" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="porc_aporte">Porcentaje del total a cubrir</label>
			<input class="form-control form-control-sm" type="number" step="1" min="5" max="100" name="porc_aporte" id="porc_aporte" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="nutro_ter">Nutroterápico</label>
			<input class="form-control form-control-sm" type="text"  name="nutro_ter" id="nutro_ter" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="suger_tm">Producto sugerido</label>
			<input class="form-control form-control-sm" type="text"  name="suger_tm" id="suger_tm" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="suger_tm">Via</label>
			<input class="form-control form-control-sm" type="text"  name="via" id="via" required="required">
	</div>
	
	<div class="col-sm-3">
			<label class="form-label-sm" for="presenta">Presentación</label>
			<input class="form-control form-control-sm" type="text"  name="presenta" id="presenta" required="required">
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="gramos_dia">Gramos por día</label>
			<input class="form-control form-control-sm" type="number" step="1" min="10" max="500" name="gramos_dia" id="gramos_dia" required="required">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="env_pormes">Envases por mes</label>
			<input class="form-control form-control-sm" type="number" step="1" min="1" max="100"  name="env_pormes" id="env_pormes" required="required">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="prof_solicita">Profesional solicitante</label>
			<input class="form-control form-control-sm" type="text"  name="prof_solicita" id="prof_solicita" required="required">
	</div>
	<div class="col-sm-4">
			
			<input  type="hidden" name="fecha_ped" value="<?=$cargadate ?? ''?> ">
	</div>

	<div class="col-sm-1">
			<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</div>

</form>
</fieldset>

</div>


