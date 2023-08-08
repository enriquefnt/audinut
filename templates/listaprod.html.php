<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 

<thead >
  <tr >
      
    <th align="center">Nutroterápico</th>
    <th align="center">Producto</th>
    <?php if ( isset($_SESSION['tipo'])&& $_SESSION['tipo']<2 ) { ?>  
    <th class="text-center">Activo</th>
    <th class="text-center">Editar</th>
    <?php } ?>
  </tr>
</thead>

 <tbody>
  <tr>
    <?php foreach($variables['productos'] as $producto): ?>
    <?php if ($_SESSION['tipo'] > 1 && $producto['activo'] != 1) continue; ?>
    <td><?= htmlspecialchars($producto['tipo'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($producto['producto'], ENT_QUOTES, 'UTF-8'); ?></td>
    <?php if (isset($_SESSION['tipo']) && $_SESSION['tipo'] < 2): ?>
      <td class="text-center">
        <?php if ($producto['activo'] == 1): ?>
          <i class="fas fa-toggle-on text-success"></i>
        <?php else: ?>
          <i class="fas fa-toggle-off text-danger"></i>
        <?php endif; ?>
      </td>
      <td class="text-center">
        <a href="/nutroter/produ?id=<?= $producto['id_producto'] ?>">
          <i class="bi bi-pencil-square"></i>
        </a>
      </td>
    <?php endif; ?>
  </tr>
  <?php endforeach; ?>
</tbody>


 </table>   
 </div>
