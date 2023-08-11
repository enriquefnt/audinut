<div class="container">

<fieldset class="border p-4">
 <legend class="w-80 p-0 h-0 ">Carga de productos
   </legend>

  <form onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off" >
  <input type="hidden" name="Nutroter[id_producto]" value="<?=$datosProdu['id_producto'] ?? ''?>">  
  
  <div class="col-sm-6">
  <label class="form-label-sm" for="tipo">Fórmula nutroterápica</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Nutroter[tipo]"  value="<?=$datosProdu['tipo'] ?? ''?>">
</div>

  <div class="col-sm-6">
  <label class="form-label-sm" for="producto">Producto</label>
  <input type="text" required="required" class="form-control form-control-sm" name="Nutroter[producto]" id="producto"  value="<?=$datosProdu['producto'] ?? ''?>">
</div>


<div class="mb-3">
                <label for="toggleSwitch" class="form-label">Activo</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="toggleSwitch" name="Nutroter[activo]" value="1">
                </div>


  <div class="col-sm-2 ">
      <button class="btn btn-primary" type="submit" name="submit">Guardar</button>
  </div>
</fieldset>
  </form>

</div>
</div>


