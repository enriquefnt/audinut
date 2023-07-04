<div class="container">

<fieldset class="border p-4">
 <legend class="w-80 p-0 h-0 ">Carga de productos
   </legend>

  <form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
  <input type="hidden" name="Nutroter[id_producto]" value="<?=$datosProd['id_producto'] ?? ''?>">  
  
  <div class="col-sm-6">
  <label class="form-label-sm" for="producto">Producto</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Nutroter[producto]"  autocomplete="off" value="<?=$datosProd['producto'] ?? ''?>">
</div>

<div class="col-sm-6">
  <label class="form-label-sm" for="tipo">Descripción</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Nutroter[tipo]"  autocomplete="off" value="<?=$datosProd['tipo'] ?? ''?>">
</div>

 <div class="form-check form-check-reverse form-switch col-sm-6"> <!-- Usa script de script.js -->
   <label class="form-check-label" for="activoSwitch"> Visible</label>
  <input class="form-check-input" type="checkbox" role="switch" id="activoSwitch" name="Nutroter[activo]"   value="<?=$datosProd['activo'] ?? ''?>" >
</div>
<input type="hidden" id="activoInput" name="Nutroter[activo]" value="<?=$datosProd['activo'] ?? '0'?>" >

  <div class="col-sm-2 ">
      <button class="btn btn-primary" type="submit" name="submit">Guardar</button>
  </div>
</fieldset>
  </form>

</div>
</div>

