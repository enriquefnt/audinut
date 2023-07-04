<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 

<thead >
  <tr >
  <th align="center">Id</th>
    <th align="center">Producto</th>
    <th align="center">Nutroterápico</th>
    <th align="center">Activo</th>

  </tr>
</thead>
  <tbody >
  <tr >
      <?php foreach($variables['productos'] as $producto): ?>
        <td> <?= htmlspecialchars($producto['id_producto']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td> <?= htmlspecialchars($producto['producto']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td> <?= htmlspecialchars($producto['tipo']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td>  <?= htmlspecialchars($producto['activo']  , ENT_QUOTES, 'UTF-8'); ?></td> 
         
 </tr>

  <?php 
  endforeach; ?>
 </tbody>
 </table>   
 </div>

