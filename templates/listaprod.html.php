<div class="container mt-4">
  <table id="example" class="table table-bordered display compact">

     <!-- ... (Encabezados y filas de la tabla) ...  -->
    <thead >
  <tr >
      
    <th align="center">Nutroterápico</th>
    <th align="center">Producto</th>
    <?php if ( isset($_SESSION['tipo'])&& $_SESSION['tipo']<2 ) { ?>  
    <th class="text-center">Estado</th>
    <th class="text-center">Editar</th>
    <?php } ?>
  </tr>
</thead>

    <tbody>
      <?php foreach ($variables['productos'] as $producto): ?>
        <?php if ($_SESSION['tipo'] > 1 && $producto['activo'] != 1) continue; ?>
        <tr>
         
          
          <td><?= htmlspecialchars($producto['tipo'], ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?= htmlspecialchars($producto['producto'], ENT_QUOTES, 'UTF-8'); ?></td>
          <?php if (isset($_SESSION['tipo']) && $_SESSION['tipo'] < 2): ?>
         

            <td class="text-center">
              <form class="toggle-form" action="/nutroter/produ" method="POST">
                <input type="hidden" name="Nutroter[id_producto]" value="<?=$producto['id_producto'] ?? ''?>">  
                <input type="hidden" name="Nutroter[producto]" value="<?=$producto['producto'] ?? ''?>"> 
                <input type="hidden" name="Nutroter[tipo]" value="<?=$producto['tipo'] ?? ''?>"> 
                <input class="form-check-input" type="checkbox" id="toggleSwitch" name="Nutroter[activo]" <?= $producto['activo'] == 1 ? 'checked' : ''; ?>>
              </form>
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

<script>
  const toggleForms = document.querySelectorAll('.toggle-form');

  toggleForms.forEach(form => {
    form.addEventListener('change', () => {
      form.submit();
    });
  });
</script>
