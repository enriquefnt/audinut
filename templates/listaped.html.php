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
      <?php foreach($variables['benefs'] as $benef): ?>
       <td><?= htmlspecialchars($benef['Nombres'] . ' ' .$benef['Apellidos'] , ENT_QUOTES, 'UTF-8'); ?></td>
       <td align="center">

       
        <a href="/benef/edit?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-pencil-square"></i>
    </a>



      </div>

    </td>
    <?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
     <td align="center">
        </div>
        <div>
        <a href="/pedido/pedido?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-sim-fill"></i></i></a>
        </div>
    </td>
      <?php } ?>

      <?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
     <td align="center">
        </div>
        <div>
        <a href="/pedido/pedido?id=<?=$pedido['id_datos_pedido']?>"><i class="bi bi-sim-fill"></i></i></a>
        </div>
    </td>
      <?php } ?>
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   
 </div>



