<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Carga</title>
</head>
<body>
	 <div class="container-fluid">
   
     
<form class="row g-3"  action="" autocomplete="off" method="post" >
 <div class="col-sm-6">
 	 <label class="form-label-sm">Buscar Caso</label>
  <input  type="text" name="Nombres" id="dName">
</div>
 <input type="hidden"name="id_datos_benef" id="dTel" value="">
<div class="col-sm-1">
		<button class="btn btn-primary" type="submit" name="submit">Buscar</button>
</div>
</form> 


</div>
	<div >
  <h2>Datos personales</h2>
</div>
<div>
<form class="row g-3"  action="" method="post" autocomplete="off" >
<div class="col-sm-6">

		<label class="form-label-sm" for="Nombres">Nombres</label>
		<input class="form-control" type="text"  name="Nombres" id="Nombres" required="required">
</div>
<div class="col-sm-6">	
		<label class="form-label-sm" for="Apellidos">Apellidos</label>
		<input class="form-control" type="text" name="Apellidos" id="Apellidos" required="required">
</div>
<div class="col-sm-4">
		<label class="form-label-sm" for="FechaNac">Fecha de Nacimiento</label>
		<input class="form-control" type="date" name="FechaNac" id="FechaNac" required="required">
</div>
<div class="col-sm-4">
		<label class="form-label-sm" for="DNI">DNI</label>
		<input class="form-control" type="number" name="DNI" id="DNI" required="required">
</div>
<div class="col-sm-4">		
		<label class="form-label-sm" for="Celular">Celular</label>
		<input class="form-control" type="number" name="Celular" id="Celular" required="required">
</div>
<div class="col-sm-6">
		<label class="form-label-sm" for="Domicilio">Domicilio</label>
		<input class="form-control" type="text" name="Domicilio" id="Domicilio" required="required">
</div>
<div class="col-sm-6">
		<label class="form-label-sm" for="Localidad">Localidad</label>
		<input class="form-control" type="text" name="Localidad" id="Localidad" required="required">
</div>
<div class="col-sm-6">
		<label class="form-label-sm" for="NombresResp">Nombres-Responsable</label>
		<input class="form-control" type="text" name="NombresResp" id="NombresResp" required="required">
</div>
<div class="col-sm-6">
		<label class="form-label-sm" for="ApellidosResp">Apellidos-Responsable</label>
		<input class="form-control" type="text" name="ApellidosResp" id="ApellidosResp" required="required">
</div>
<div class="col-sm-6">
		<label class="form-label-sm" for="DNIResp">DNI-Responsable</label>
		<input class="form-control" type="number" name="DNIResp" id="DNIResp" required="required">
</div>

<div class="col-sm-6">
		<label class="form-label-sm" for="CelularResp">Celular-Responsable</label>
		<input class="form-control" type="number" name="CelularResp" id="CelularResp" required="required">
</div>

<div class="col-sm-11">
</div>


<div class="col-sm-1">

		<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
</div>
	</form>
</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
          
      ac.attach({
        target: "dName",
        data: "search.php",
        
        // OPTIONAL
        delay : 300,
        min : 3
      });
    });
    </script>

    <script src="../js/autocompleta.js"></script>








</body>
</html>