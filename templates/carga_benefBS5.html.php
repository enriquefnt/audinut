<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Carga</title>
</head>
<body>
	<div >
  <h2>Datos personales</h2>
</div>
<div>
<form class="row g-3"  action="" method="post" >
<div class="col-md-6">

		<label class="form-label" for="Nombres">Nombres</label>
		<input class="form-control" type="text"  name="Nombres" id="Nombres" required="required">
</div>
<div class="col-md-6">	
		<label class="form-label" for="Apellidos">Apellidos</label>
		<input class="form-control" type="text" name="Apellidos" id="Apellidos" required="required">
</div>
<div class="col-md-4">
		<label class="form-label" for="FechaNac">Fecha de Nacimiento</label>
		<input class="form-control" type="date" name="FechaNac" id="FechaNac" required="required">
</div>
<div class="col-md-4">
		<label class="form-label" for="DNI">DNI</label>
		<input class="form-control" type="number" name="DNI" id="DNI" required="required">
</div>
<div class="col-md-4">		
		<label class="form-label" for="Celular">Celular</label>
		<input class="form-control" type="number" name="Celular" id="Celular" required="required">
</div>
<div class="col-md-6">
		<label class="form-label" for="Domicilio">Domicilio</label>
		<input class="form-control" type="text" name="Domicilio" id="Domicilio" required="required">
</div>
<div class="col-md-6">
		<label class="form-label" for="Localidad">Localidad</label>
		<input class="form-control" type="text" name="Localidad" id="Localidad" required="required">
</div>
<div class="col-md-6">
		<label class="form-label" for="NombresResp">Nombres-Responsable</label>
		<input class="form-control" type="text" name="NombresResp" id="NombresResp" required="required">
</div>
<div class="col-md-6">
		<label class="form-label" for="ApellidosResp">Apellidos-Responsable</label>
		<input class="form-control" type="text" name="ApellidosResp" id="ApellidosResp" required="required">
</div>
<div class="col-md-6">
		<label class="form-label" for="DNIResp">DNI-Responsable</label>
		<input class="form-control" type="number" name="DNIResp" id="DNIResp" required="required">
</div>

<div class="col-md-6">
		<label class="form-label" for="CelularResp">Celular-Responsable</label>
		<input class="form-control" type="number" name="CelularResp" id="CelularResp" required="required">
</div>







		<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</form>
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>