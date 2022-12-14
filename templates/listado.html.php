<p><?=$totalBenef?> beneficiarios cargados.</p>

<?php foreach($benefs as $benef): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($benef['Nombres'], ENT_QUOTES, 'UTF-8') . ' '.
  htmlspecialchars($benef['Apellidos'], ENT_QUOTES, 'UTF-8');?>
</p>

</blockquote>
<?php endforeach; ?>
 
