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
    <option hidden selected><?=$datosUser['profesion'] ?? '...'?></option>
    <option value='Enfermería'>Enfermería</option>
    <option value='Nutrición'>Nutrición</option>
    <option value='Medicina'>Medicina</option>
    <option value='Agente Sanitario'>Agente Sanitario</option>
    <option value='Administrativo'>Administrativo</option>
    <option value='Otros'>Otros</option>
    </select>
 </div>

<div class="col-sm-3">
  <label class="form-label-sm" for="tipo">Función</label>
  <select name="Usuario[tipo]" id="tipo" class="form-control form-control-sm">
  	<option hidden selected><?=$datosUser['tipo'] ?? '...'?></option>
  <!--  <option value='1'>Administrador</option> -->
    <option value='Auditor'>Auditor</option>
    <option value=Profesional>Profesional</option>
    <option value='Administrativo'>Administrativo</option>
    <option value='Otros'>Otros</option>
    </select>
 </div>

 <div class="col-sm-6">
    	<label class="form-label-sm" for="establecimiento_nombre">Institución</label>
    	<input type="text" name="Usuario[establecimiento_nombre]" id="establecimiento_nombre" class="form-control form-control-sm" autocomplete="off" value="<?=$datosUser['establecimiento_nombre'] ?? ''?>">
		    </div>

   <div>
            <input type="hidden" name="Usuario[id_establecimiento]" id="id_establecimiento"  value="<?=$row['codi_esta'] ?? ''?>" />
        </div>     


<div class="col-sm-3">		
			<label class="form-label-sm" for="celular">Celular</label>
			<!-- <input class="form-control form-control-sm" type="tel"  name="Usuario[celular]" placeholder="###-#######" oninput="llenarCampo('celular')" id="celular" pattern="[0-9]{3}-[0-9]{7}"  value="<?=$datosUser['celular'] ?? ''?>"> -->
      <input class="form-control form-control-sm" type="text" id="celular" name="Usuario[celular]" placeholder="###-#######"  data-llenar-campo="celular" pattern="[0-9]{3}-[0-9]{7}"  value="<?=$datosUser['celular'] ?? ''?>" >
  
  
    </div>

<div class="col-sm-3">		
			<label class="form-label-sm" for="email">Correo electrónico</label>
			<input class="form-control form-control-sm" type="email"   name="Usuario[email]" id="email"  value="<?=$datosUser['email'] ?? ''?>">

	</div>


<?php 
if(empty($datosUser['user'])) { ?>

<div class="col-sm-3">
	<label class="form-label-sm" for="usuario">Nombre de usuario</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Usuario[user]"  autocomplete="off" value="<?=$datosUser['user'] ?? ''?>">
</div>

<div class="col-sm-3">
	<label class="form-label-sm" for="password">Contraseña</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Usuario[password]"  autocomplete="off" value="<?=$datosUser['password'] ?? ''?>">
</div>

<?php } ?>

  <div class="col-sm-3">
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