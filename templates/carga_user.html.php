<?php
if (!empty($errors)) :
?>
 <div class="alert alert-warning" role="alert">
    <p>No se puede crear el usuario, revise:</p>
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
 <legend class="w-80 p-0 h-0 ">Datos personales para nuevo usuario
   </legend>

  <form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
  <input type="hidden" name="Usuario[id_usuario]" id="id_usuario" value=<?=$datosUser['id_usuario'] ?? ''?> >
       
  <div class="col-sm-6">
  	<label class="form-label-sm" for="nombre">Nombres</label>
    <input type="text"  class="form-control form-control-sm" name="Usuario[nombre]"  autocomplete="off" value="<?=$datosUser['nombre'] ?? ''?>">
</div>
  <div class="col-sm-6">
  <label class="form-label-sm" for="apellido">Apellidos</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Usuario[apellido]"  autocomplete="off" value="<?=$datosUser['apellido'] ?? ''?>">
</div>

<div class="col-sm-3">
  <label class="form-label-sm" for="profesion">Profesión</label>
  <select name="Usuario[profesion]"  class="form-control form-control-sm">
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
  <select name="Usuario[tipo]" id="tipo" class="form-control form-control-sm">
  	<option hidden selected>...</option>
  <!--  <option value='1'>Administrador</option> -->
    <option value='2'>Auditor</option>
    <option value='3'>Profesional</option>
    <option value='4'>Administrativo</option>
    <option value='5'>Otros</option>
    </select>
 </div>

 <div class="col-sm-6">
    	<label class="form-label-sm" for="establecimiento_nombre">Institución</label>
    	<input type="text" name="Usuario[establecimiento_nombre]" id="establecimiento_nombre" class="form-control form-control-sm" autocomplete="off" />
		    </div>

   <div class="col-sm-6">
            <input type="hidden" name="Usuario[id_establecimiento]" id="id_establecimiento"  value="<?=$row['codi_esta'] ?? ''?>" />
        </div>     


<div class="col-sm-4">		
			<label class="form-label-sm" for="celular">Celular</label>
			<!-- <input class="form-control form-control-sm" type="tel"  name="Usuario[celular]" placeholder="###-#######" oninput="llenarCampo('celular')" id="celular" pattern="[0-9]{3}-[0-9]{7}"  value="<?=$datosUser['celular'] ?? ''?>"> -->
      <input type="text" id="celular" name="Usuario[celular]" placeholder="###-#######" data-llenar-campo="celular" pattern="[0-9]{3}-[0-9]{7}"  value="<?=$datosUser['celular'] ?? ''?>" >
  
  
    </div>

<div class="col-sm-4">		
			<label class="form-label-sm" for="email">Correo electrónico</label>
			<input class="form-control form-control-sm" type="email"   name="Usuario[email]" id="email"  value="<?=$datosUser['email'] ?? ''?>">

	</div>

<div class="col-sm-2">
	<label class="form-label-sm" for="usuario">Nombre de usuario</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Usuario[user]"  autocomplete="off" value="<?=$datosUser['usuario'] ?? ''?>">
</div>

<div class="col-sm-2">
	<label class="form-label-sm" for="password">Contraseña</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Usuario[password]"  autocomplete="off" value="">
</div>

  <div class="col-sm-2">
      <button class="btn btn-primary" type="submit" name="submit">Enviar</button>
  </div>
</fieldset>
  </form>

</div>
</div>
<script>

var complete_establecimiento_nombre = new Autocom(document.getElementById('establecimiento_nombre'), {
    data:<?php echo json_encode($data_insti); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>

