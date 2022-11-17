<div class="container">
	<form onkeydown="return event.key != 'Enter';" class="row g-3"  action="edita_benef.php" method="post" autocomplete="off" >
		<h4>Datos personales</h4>
	
	<input type="hidden" name="id_datos_benef" id="id_datos_benef" value=<?=$datosCaso['id_datos_benef'] ?? ''?> >

	<div class="col-sm-6">

			<label class="form-label-sm" for="Nombres">Nombres</label>
			<input class="form-control" type="text"  name="Nombres" id="Nombres" required="required" value="<?=$datosCaso['Nombres'] ?? ''?>">
	</div>
	<div class="col-sm-6">	
			<label class="form-label-sm" for="Apellidos">Apellidos</label>
			<input class="form-control" type="text" name="Apellidos" id="Apellidos" required="required" value="<?=$datosCaso['Apellidos'] ?? ''?>">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="FechaNac">Fecha de Nacimiento</label>
			<input class="form-control" type="date" name="FechaNac" id="FechaNac" min="1920-01-01"  max="<?=date('Y-m-d');?>" value="<?=$datosCaso['FechaNac'] ?? ''?>">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="DNI">DNI</label>
			<input class="form-control" type="number" step="1" min="1000000" max="99000000" name="DNI" id="DNI" required="required" value="<?=$datosCaso['DNI'] ?? ''?>">
	</div>
	<div class="col-sm-4">		
			<label class="form-label-sm" for="Celular">Celular</label>
			<input class="form-control" type="number" name="Celular" id="Celular" value="<?=$datosCaso['Celular'] ?? ''?>" autocomplete="off"> 
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="Domicilio">Domicilio</label>
			<input class="form-control" type="text" name="Domicilio" id="Domicilio" required="required" value="<?=$datosCaso['Domicilio'] ?? ''?>" autocomplete="off">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="Localidad">Localidad</label>
			<input class="form-control" type="text" name="Localidad" id="Localidad" value="<?=$datosCaso['Localidad'] ?? ''?>" autocomplete="off">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="NombresResp">Nombres-Responsable</label>
			<input class="form-control" type="text" name="NombresResp" id="NombresResp" value="<?=$datosCaso['NombresResp'] ?? ''?>" autocomplete="off">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="ApellidosResp">Apellidos-Responsable</label>
			<input class="form-control" type="text" name="ApellidosResp" id="ApellidosResp" value="<?=$datosCaso['ApellidosResp'] ?? ''?>">
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="DNIResp">DNI-Responsable</label>
			<input class="form-control" type="number" name="DNIResp" id="DNIResp"value="<?=$datosCaso['DNIResp'] ?? ''?>" autocomplete="off"> 
	</div>

	<div class="col-sm-6">
			<label class="form-label-sm" for="CelularResp">Celular-Responsable</label>
			<input class="form-control" type="number" step="1" min="1000000" max="99000000" name="CelularResp" id="CelularResp" value="<?=$datosCaso['CelularResp'] ?? ''?>" autocomplete="off">
	</div>

		
<div class="container">
	<a href="../include/busca_benef.php"  class="btn btn-primary btn-sm" role="button">Volver sin cambiar</a>

<input type="submit"  name="submit"  class="btn btn-primary btn-sm" value="Guardar Cambios">

</div>
</form>	

</div>