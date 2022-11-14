
 
  <div class="container-fluid">
     
	<form class="row g-3"  action="" autocomplete="off" method="post" >
		 <div class="col-sm-3">
		 	<!-- <label class="form-label-sm">Buscar Caso</label> -->
		  <input  type="text" name="Nombres" id="dName" placeholder="Buscar ...">
		</div>
		 <input type="hidden"name="id_datos_benef" id="dTel" value="0">
		<div class="col-sm-1">
				<button class="btn btn-primary" type="submit" name="submit">Buscar</button>
		</div>
	</form> 
  </div>	

<?php
$id_benef=0;

if (isset($_POST['id_datos_benef'])){
 $id_benef=$_POST['id_datos_benef'];}
// else {$id_benef=0;} ;



// if ($_POST['id_datos_benef'] == "0") {
 if ($id_benef == "0") {

//alert("Mi primer alert");

 echo 'No existe en la base, puede ingresar los datos';
?>
 

<div class="container">
	<form class="row g-3"  action="" method="post" autocomplete="off" >
		<h4>Datos personales</h4>
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
			<input class="form-control" type="number" name="Celular" id="Celular" >
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
			<input class="form-control" type="text" name="NombresResp" id="NombresResp" >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="ApellidosResp">Apellidos-Responsable</label>
			<input class="form-control" type="text" name="ApellidosResp" id="ApellidosResp" >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="DNIResp">DNI-Responsable</label>
			<input class="form-control" type="number" name="DNIResp" id="DNIResp" >
	</div>

	<div class="col-sm-6">
			<label class="form-label-sm" for="CelularResp">Celular-Responsable</label>
			<input class="form-control" type="number" name="CelularResp" id="CelularResp" >
	</div>

	<div class="col-sm-11">
	</div>


	<div class="col-sm-1">

			<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</div>
		</form>
</div>



<?php	} 

elseif (($_POST['id_datos_benef'] > "0")) {
	echo 'Existe, puede editar ';
?>

<div class="container">
	<form class="row g-3"  action="edita_benef.php" method="post" autocomplete="off" >
		<h4>Datos personales</h4>
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
			<input class="form-control" type="date" name="FechaNac" id="FechaNac" value="<?=$datosCaso['FechaNac'] ?? ''?>">
	</div>
	<div class="col-sm-4">
			<label class="form-label-sm" for="DNI">DNI</label>
			<input class="form-control" type="number" name="DNI" id="DNI" required="required" value="<?=$datosCaso['DNI'] ?? ''?>">
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
			<input class="form-control" type="text" name="Localidad" id="Localidad" required="Localidad" autocomplete="off">
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
			<input class="form-control" type="number" name="CelularResp" id="CelularResp" value="<?=$datosCaso['CelularResp'] ?? ''?>" autocomplete="off">
	</div>

	


	
		
		<div class="container">

			<button class="btn btn-primary" type="submit" name="submit">Grabar cambios</button>

			<button class="btn btn-primary" type="button" name="otra">ir a otra parte</button>
	
			<a href="carga_benef.php"  class="btn btn-primary" role="button">Volver sin cambiar</a>

	</div>
	</form>
</div>



<?php } ?>

