<p><?=$totalBenef?> beneficiarios cargados.</p>

<?php foreach($todos as $benef): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($benef['Nombres'], ENT_QUOTES, 'UTF-8')?>
</p>
<p>
  <?=htmlspecialchars($joke['Apellidos'], ENT_QUOTES, 'UTF-8'); ?>
  </p>
</blockquote>
<?php endforeach; ?>
 
