<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 
<div>
<legend class="w-80 p-0 h-0 ">Solicitud de nutroterápico - Beneficiario:
    <?=$datosBenef['Nombres'] .' '. $datosBenef['Apellidos']?>
    </legend>
</div>
<thead >
  <tr >
    <th align="center">Fecha</th>
    <th align="center">Producto</th>
    <th align="center">Estado</th>
<?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
        <th align="center">Editar</th>
            <?php } ?>
    
  </tr>
</thead>
  <tbody >
  <tr >
      <?php foreach($variables['pedidos'] as $pedido): ?>
       <td><?= htmlspecialchars($pedido['fecha_ped']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td><?= htmlspecialchars($pedido['nutro_ter']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td><?= htmlspecialchars($pedido['env_pormes']  , ENT_QUOTES, 'UTF-8'); ?></td>
       <td> <a href="/benef/edit?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-pencil-square"></i>
    </a></td>

          
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   
 </div>



