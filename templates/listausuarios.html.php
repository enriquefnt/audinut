


<<div class="container mt-4">
  <table id="example" class="table table-bordered display compact">
    <thead >
  <tr >
      
    <th align="center">Nombre</th>
    <th align="center">Dependencia</th>
    <?php if ( isset($_SESSION['tipo'])&& $_SESSION['tipo']<3 ) { ?>  
    <th class="text-center">Editar</th>
    <?php } ?>
  </tr>
</thead>

 <tbody>
  <tr>
    <?php foreach($variables['usuarios'] as $usuario): ?>
    
    <td><?= htmlspecialchars($usuario['nombres'], ENT_QUOTES, 'UTF-8'); ?></td>
    <td><?= htmlspecialchars($usuario['establecimiento_nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
    
      <td class="text-center">
        <a href="/user/user?id=<?= $usuario['id_usuario'] ?>">
          <i class="bi bi-pencil-square"></i>
        </a>
      </td>
   
  </tr>
  <?php endforeach; ?>
  </tbody>
  </table>
</div>