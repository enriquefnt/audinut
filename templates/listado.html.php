<p><?=$variables['totalBenef']?> beneficiarios cargados.</p>

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
 
