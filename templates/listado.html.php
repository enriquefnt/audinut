<p><?=$variables['totalBenef']?> beneficiarios cargados.</p>

<div>
  <table id="example" class="w3-table-all w3-tiny" > 

<thead >
  <tr class="w3-blue-grey">

    <th>Nombre</th>
      <th>Editar</th>
    <th>Cargar Pedido</th>
  </tr>
</thead>
  <tbody class="table-hover">
  <tr >
  <?php foreach($variables['benefs'] as $benef): ?>
   <td><?= htmlspecialchars($benef['Nombres'] . ' ' .$benef['Apellidos'] , ENT_QUOTES, 'UTF-8'); ?></td>
   <td align="center">

        <div>
        <form action="/tablas/edit" method="post">
        <input type="hidden" name="id_datos_benef" value=<?= htmlspecialchars($benef['id_datos_benef'], ENT_QUOTES, 'UTF-8'); ?>>
                        <button  type="submit"><i class="far fa-eye  fa-lg"></i></button>
        </form>
      </div>
    </td>
    <td align="center">
        </div>
        <div>
        <form action="/tablas/pedido" method="post">
        <input type="hidden" name="id_datos_benef" value=<?= htmlspecialchars($benef['id_datos_benef'], ENT_QUOTES, 'UTF-8'); ?>>
                        <button class="btn btn-default" type="submit"><i class="far fa-eye  fa-lg"></i></button>
        </form>
        </div>
    </td>


  </tr>
  <?php endforeach; ?>
    


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

 <script type="text/javascript">
$(document).ready(function () {
    $('#example').DataTable();
});
</script>