
<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 

<thead >
  <tr >

    <th>Nombre</th>
      <th>Editar</th>
      <th>Cargar Pedido</th>
  </tr>
</thead>
  <tbody >
  <tr >
  <?php foreach($variables['benefs'] as $benef): ?>
   <td><?= htmlspecialchars($benef['Nombres'] . ' ' .$benef['Apellidos'] , ENT_QUOTES, 'UTF-8'); ?></td>
   <td align="center">

        <div>
        <a href="/benef/edit?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-pencil-square"></i>
</a>
      </div>
    </td>
    <td align="center">
        </div>
        <div>
        <a href="/pedido/pedido?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-sim-fill"></i></i></a>
        </div>
    </td>
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   




