
 
 
 

<div class="container">
	<form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
		<h4>Datos personales</h4>
	<div class="col-sm-6">

			<label class="form-label-sm" for="Nombres">Nombres</label>
			<input class="form-control form-control-sm" type="text"  name="Nombres" id="Nombres" autocomplete="off"  required="required">
	</div>
	<div class="col-sm-6">	
			<label class="form-label-sm" for="Apellidos">Apellidos</label>
			<input class="form-control form-control-sm" type="text" name="Apellidos" id="Apellidos" autocomplete="off"  required="required">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="FechaNac">Fecha de Nacimiento</label>
			<input class="form-control form-control-sm" type="date" min="1920-01-01"  max="<?=date('Y-m-d');?>" name="FechaNac" id="FechaNac" required="required">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="DNI">DNI</label>
			<input class="form-control form-control-sm" type="number" step="1" min="1000000" max="99000000"  name="DNI" id="DNI" required="required">
	</div>
	<div class="col-sm-4">		
			<label class="form-label-sm" for="Celular">Celular</label>
			<input class="form-control form-control-sm" type="number" step="1" min="100000000" max="99000000000"  name="Celular" id="Celular" pattern="[0-9]{3}-[0-9]{7}" placeholder="###-#######">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="Domicilio">Domicilio</label>
			<input class="form-control form-control-sm" type="text" name="Domicilio" id="Domicilio" required="required">
	</div>
<!--	<div class="col-sm-6">
			<label class="form-label-sm" for="Localidad">Localidad</label>
			<input class="form-control form-control-sm" type="text" name="Localidad" id="Localidad" required="required">
	</div>-->
    <div class="col-sm-6">
    	<label class="form-label-sm" for="Localidad">Localidad</label>
    	<input type="text" name="nombre_geo" id="nombre_geo" class="form-control form-control-lg" autocomplete="off" />
		
    </div>
    	<div class="col-sm-6">
			<label class="form-label-sm" for="NombresResp">Nombres-Responsable</label>
			<input class="form-control form-control-sm" type="text" name="NombresResp" id="NombresResp" >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="ApellidosResp">Apellidos-Responsable</label>
			<input class="form-control form-control-sm" type="text" name="ApellidosResp" id="ApellidosResp" >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="DNIResp">DNI-Responsable</label>
			<input class="form-control form-control-sm" type="number" step="1" min="1000000" max="99000000" name="DNIResp" id="DNIResp" >
	</div>

	<div class="col-sm-6">
			<label class="form-label-sm" for="CelularResp">Celular-Responsable</label>
			<input class="form-control form-control-sm" type="tel"  name="CelularResp" id="CelularResp" pattern="[0-9]{3}-[0-9]{7}" placeholder="###-#######">
	</div>

	<div class="col-sm-11">
	</div>


	<div class="col-sm-1">

			<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</div>
		</form>
</div>

<script>

var auto_complete = new Autocomplete(document.getElementById('nombre_geo'), {
    data:<?php echo json_encode($data); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>

