
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
	<div class="col-sm-2">
  <label class="form-label-sm" for="profesion">Profesion</label>
  <select name="profesion" id="profesion" class="w3-input">
    <option value='1'>Enfermería</option>
    <option value='2'>Nutrición</option>
    <option value='3'>Medicina</option>
    <option value='4'>Agente Sanitario</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
 </div>

 <div class="col-sm-2">
  <label class="form-label-sm" for="tipo">Funcion</label>
  <select name="tipo" id="tipo" class="w3-input">
    <option value='1'>Administrador</option>
    <option value='2'>Auditor</option>
    <option value='3'>Profesional</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
 </div>
	
	
	
    <div class="col-sm-6">
    	<label class="form-label-sm" for="establecimiento_nombre">Institución</label>
    	<input type="text" name="establecimiento_nombre" id="establecimiento_nombre" class="form-control form-control-lg" autocomplete="off" />
		    </div>

<div class="col-sm-4">		
			<label class="form-label-sm" for="Celular">Celular</label>
			<input class="form-control form-control-sm" type="tel"   name="Celular" id="Celular"pattern="[0-9]{3}-[0-9]{7}" placeholder="###-#######">
	</div>

<div class="col-sm-4">		
			<label class="form-label-sm" for="email">Correo electrónico</label>
			<input class="form-control form-control-sm" type="email"   name="Celular" id="email">
	</div>

    	<div class="col-sm-6">
			<label class="form-label-sm" for="usuario">Usuario</label>
			<input class="form-control form-control-sm" type="text" name="usuario" id="usuario" >
	</div>
	<div class="col-sm-6">
			<label class="form-label-sm" for="password">Contraseña</label>
			<input class="form-control form-control-sm" type="text" name="password" id="password" >
	</div>
	


	<div class="col-sm-1">

			<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
	</div>
		</form>
</div>

<script>

var auto_complete = new Autocomplete(document.getElementById('establecimiento_nombre'), {
    data:<?php echo json_encode($data_esta); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>

