
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
        <a href="/tablas/edit?id=<?=$benef['id_datos_benef']?>"><i class="fa-light fa-file-pen"></i>
</a>
      </div>
    </td>
    <td align="center">
        </div>
        <div>
        <a href="/tablas/pedido?id=<?=$benef['id_datos_benef']?>"><i class="fa-light fa-clipboard"></i></i></a>
        </div>
    </td>
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   


<!--

<?php foreach($variables['benefs'] as $benef): ?>
<blockquote>
  <p>
    <?=htmlspecialchars($benef['Nombres'], ENT_QUOTES, 'UTF-8') . ' '.
   htmlspecialchars($benef['Apellidos'], ENT_QUOTES, 'UTF-8') 
   ;?>
  </p>

<a href="/tablas/edit?id=<?=$benef['id_datos_benef']?>">Editar</a>
<a href="/tablas/pedido?id=<?=$benef['id_datos_benef']?>">Cargar Pedido</a>
    </p>

</blockquote>

<?php endforeach; ?>
-->

