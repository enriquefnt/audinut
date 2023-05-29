<?php
if (!empty($errors)) :
?>
 <div class="alert alert-warning" role="alert">
    <p>No se puede cargar pedido:</p>
  <ul>
    <?php
    foreach ($errors as $error) :
    ?>
    <li><?= $error ?></li>
    <?php
    endforeach; ?>
  </ul>
  </div>
<?php
endif;
?>


<div class="container">

	<fieldset class="border p-2">
		
   <legend class="w-80 p-0 h-0 ">Solicitud de nutroterápico - Beneficiario:
    <?=$datosBenef['Nombres'] .' '. $datosBenef['Apellidos']?>
    </legend>

	<form onkeydown="return event.key != 'Enter';" class="row g-3"   method="post" 	autocomplete="off" >
	<!-- <form onkeydown="return event.key != 'Enter';" class="row g-3"  action=""  onsubmit="myButton.disabled = true; return true;" method="post" autocomplete="off" > -->
		
	

	<input type="hidden"name="Pedido[id_datos_pedido]" id="id_datos_pedido" value=<?=$datosPedido['id_datos_pedido'] ?? ''?> >
<input type="hidden"name="Pedido[id_datos_benef]" id="id_datos_benef" value=<?=$datosBenef['id_datos_benef'] ?? ''?> >


	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_med">Diagnóstico médico</label>
			<input class="form-control form-control-sm" type="text" required="required" name="Pedido[diag_med]" id="diag_med" 
			value=<?=$datosPedido['diag_med'] ?? ''?> >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="diag_nutri">Diagnóstico Nutricional</label>
			<input class="form-control form-control-sm" type="text" required="required" name="Pedido[diag_nutri]" id="diag_nutri" 
			value=<?=$datosPedido['diag_nutri'] ?? ''?> >
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="peso">Peso</label>
			<input class="form-control form-control-sm" type="number" required="required" step="0.1" min="1" max="150" name="Pedido[peso]" 
			value=<?=$datosPedido['peso'] ?? ''?> id="peso" >
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="talla">Talla</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="40" max="210" name="Pedido[talla]" id="talla" 
			value=<?=$datosPedido['talla'] ?? ''?> required>
	</div>
	<div class="col-sm-2">
			<label class="form-label-sm" for="variacion">Variación de peso</label>
			<input class="form-control form-control-sm" type="number" step="0.1" min="-20" max="20"  name="Pedido[variacion]" id="variacion" 
			value=<?=$datosPedido['variacion'] ?? ''?> required>
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="requ_calorias">Requerimiento calórico</label>
			<input class="form-control form-control-sm" type="number" required="required" step="5" min="50" max="7000" name="Pedido[requ_calorias]" id="requ_calorias" 
			value=<?=$datosPedido['requ_calorias'] ?? ''?>
			>
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="porc_aporte">Porcentaje del total a cubrir</label>
			<input class="form-control form-control-sm" type="number"  required="required" step="1" min="5" max="100" name="Pedido[porc_aporte]" id="porc_aporte" 
			value=<?=$datosPedido['porc_aporte'] ?? ''?>>
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="nutro_ter">Nutroterápico</label>
			<input class="form-control form-control-sm" type="text" required="required" name="Pedido[nutro_ter]" id="nutro_ter" 
			value=<?=$datosPedido['nutro_ter'] ?? ''?> >
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="suger_tm">Producto sugerido</label>
			<input class="form-control form-control-sm" type="text" required="required" name="Pedido[suger_tm]" id="suger_tm" 
			value=<?=$datosPedido['suger_tm'] ?? ''?> >
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="via">Via</label>
			<input class="form-control form-control-sm" type="text" required="required" name="Pedido[via]" id="via" 
			value=<?=$datosPedido['via'] ?? ''?> >
	</div>
	
	<div class="col-sm-3">
			<label class="form-label-sm" for="presenta">Presentación</label>
			<input class="form-control form-control-sm" type="text" required="required"  name="Pedido[presenta]" id="presenta" 
			value=<?=$datosPedido['presenta'] ?? ''?> >
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="gramos_dia">Gramos por día</label>
			<input class="form-control form-control-sm" type="number" required="required" step="1" min="10" max="500" name="Pedido[gramos_dia]" id="gramos_dia" 
			value=<?=$datosPedido['gramos_dia'] ?? ''?> >
	</div>
	<div class="col-sm-3">
			<label class="form-label-sm" for="env_pormes">Envases por mes</label>
			<input class="form-control form-control-sm" type="number" required="required" step="1" min="1" max="100"  name="Pedido[env_pormes]" id="env_pormes" 
			value=<?=$datosPedido['env_pormes'] ?? ''?> >
	</div>

	<div class="col-sm-3">
			<label class="form-label-sm" for="estado">Estado</label>
			
			
			<select class="form-control form-control-sm" name="Pedido[estado]"  id="estado">
			<option value=<?=$datosPedido['estado'] ?? ''?>><?=$datosPedido['estado'] ?? ''?></option>
			<option value="Pendiente">Pendiente</option>
			<option value="Rechazado">Rechazado</option>
			<option value="En Trámite">En Trámite</option>
			<option value="Liberado">Liberado</option>
			<option value="Entregado">Entregado</option>
			</select>



			<!-- <input class="form-control form-control-sm" type="text" required="required"  name="Pedido[estado]" id="estado" > -->
	</div>
	

	<div class="container">
	<a href="/benef/listar"  class="btn btn-primary btn-sm" role="button">Salir sin cambiar</a>

<input type="submit" id="myButton"  name=submit class="btn btn-primary btn-sm" value="Guardar">

</div>
</form>
</fieldset>

</div>
