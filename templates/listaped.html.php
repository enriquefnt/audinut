<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 
<div>
<legend class="w-80 p-0 h-0 ">Solicitud de nutroterápico - Beneficiario:
   
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
      <?php foreach($variables as $pedido): ?>
       <td><?=$pedido['fecha_ped'] ; ?></td>
       <td><?= $pedido[0] ; ?></td>
       <td><?= $pedido['env_pormes'] ; ?></td>
       <td> <a href="/pedido/listar?id=<?=$pedido['id_datos_pedido']?>"><i class="bi bi-pencil-square"></i>
    </a></td>

  
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   
 </div>



