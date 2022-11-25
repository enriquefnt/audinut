

<div class="container">
      
<form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off">


  <div class="col-sm-6">
  	<label class="form-label-sm" for="nombre">Nombres</label>
    <input type="text" required="required" class="form-control form-control-sm" name="nombre"  autocomplete="off" value="">
</div>
  <div class="col-sm-6">
  <label class="form-label-sm" for="apellido">Apellidos</label>
  <input type="text" required="required" class="form-control form-control-sm" name="apellido"  autocomplete="off" value="">
</div>

<div class="col-sm-3">
  <label class="form-label-sm" for="profesion">Profesión</label>
  <select name="profesion"  class="form-control form-control-sm">
    <option hidden selected>...</option>
    <option value='1'>Enfermería</option>
    <option value='2'>Nutrición</option>
    <option value='3'>Medicina</option>
    <option value='4'>Agente Sanitario</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
 </div>

<div class="col-sm-3">
  <label class="form-label-sm" for="tipo">Función</label>
  <select name="tipo" id="tipo" class="form-control form-control-sm">
  	<option hidden selected>...</option>
    <option value='1'>Administrador</option>
    <option value='2'>Auditor</option>
    <option value='3'>Profesional</option>
    <option value='5'>Administrativo</option>
    <option value='6'>Otros</option>
    </select>
 </div>

 <div class="col-sm-6">
    	<label class="form-label-sm" for="establecimiento_nombre">Institución</label>
    	<input type="text" name="establecimiento_nombre" id="establecimiento_nombre" class="form-control form-control-sm" autocomplete="off" />
		    </div>


<div class="col-sm-4">		
			<label class="form-label-sm" for="celular">Celular</label>
			<input class="form-control form-control-sm" type="tel"  name="celular" id="celular"pattern="[0-9]{3}-[0-9]{7}" placeholder="###-#######">
	</div>

<div class="col-sm-4">		
			<label class="form-label-sm" for="email">Correo electrónico</label>
			<input class="form-control form-control-sm" type="email"   name="email" id="email">
	</div>

<div class="col-sm-2">
	<label class="form-label-sm" for="usuario">Nombre de usuario</label>
  <input type="text" required="required" class="form-control form-control-sm" name="usuario"  autocomplete="off" value="">
</div>

<div class="col-sm-2">
	<label class="form-label-sm" for="password">Contraseña</label>
  <input type="text" required="required" class="form-control form-control-sm" name="password"  autocomplete="off" value="">
</div>

  <div class="col-sm-2"> 
    <button type="submit" class="w3-btn w3-round-large">Cargar</button>
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
