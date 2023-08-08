<div class="container mt-4">


  <table id="example" class="table table-bordered display compact" > 
<div>
<legend class="w-80 p-0 h-0 ">Solicitudes de nutroterápico 
    </legend>
</div>

<thead >
  <tr align="center">
    <th align="center">Fecha</th>
    <th align="center">Nombre</th>
    <th align="center">Nutroterápico</th>
    <th align="center">Producto</th>
    <th align="center">Cantidad</th>
    <th align="center">Estado</th>
    <th align="center">Solicita</th>
<?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
        <th align="center">Editar</th>
            <?php } ?>
     <th align="center">Imprimir</th>
    
  </tr>
</thead>
  <tbody >
  <tr >
      <?php 
      
      foreach($pedidos as $pedido): ?>
       <td><?=$pedido['fecha_ped'] ; ?></td>
       <td><?=$pedido['Nombres'] ; ?></td>
       <td><?= $pedido['nutro_ter'] ; ?></td>
       <td><?= $pedido['suger_tm'] ; ?></td>
       <td><?= $pedido['env_pormes'] ; ?></td>
       <td><?= $pedido['estado'] ; ?></td>
       <td><?= $pedido['apellido'] ; ?></td>
       
       <td> <a href="/pedido/pedido?idx=<?=$pedido['id_datos_pedido']?>"><i class="bi bi-pencil-square"></i>
    </a></td>
    <td> <a href="/pedido/print?id=<?=$pedido['id_datos_pedido']?>" target="_blank"><i class="fa-regular fa-file-pdf"></i>
    </a></td>

  
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   
 
 </div>
  


 </div>



