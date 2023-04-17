<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 
<div>
<legend class="w-80 p-0 h-0 ">Solicitud de nutroterápico - Beneficiario:
   
    </legend>
</div>
<thead >
  <tr align="center">
    <th align="center">Fecha</th>
    <th align="center">Producto</th>
    <th align="center">Cantidad</th>
<?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
        <th align="center">Editar</th>
            <?php } ?>
    
  </tr>
</thead>
  <tbody >
  <tr >
      <?php 
      if (isset($pedidos)) {
      foreach($pedidos as $pedido): ?>
       <td><?=$pedido['fecha_ped'] ; ?></td>
       <td><?= $pedido['nutro_ter'] ; ?></td>
       <td><?= $pedido['env_pormes'] ; ?></td>
       <td> <a href="/pedido/listar?id=<?=$pedido['id_datos_pedido']?>"><i class="bi bi-pencil-square"></i>
    </a></td>

  
 </tr>

  <?php endforeach; }?>
 </tbody>
 </table>   
 </div>



