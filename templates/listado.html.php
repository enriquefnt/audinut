
<div class="container mt-4">
  <table id="example" class="table table-bordered display compact" > 

<thead >
  <tr >

    <th>Nombre</th>
    <th>Editar Beneficiario</th>
<?php if (isset($_SESSION) &&( $_SESSION['tipo'] < 4)) { ?>
    <th>Cargar Pedido</th>
    <th>Ver/Editar</th>
            <?php } ?>
    
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
        <a href="/pedido/pedido?id=<?=$benef['id_datos_benef']?>"><i class="bi bi-sim-fill"></i></i></a>
        </div>
    </td>
      <?php } ?>
 </tr>

  <?php endforeach; ?>
 </tbody>
 </table>   
 </div>



