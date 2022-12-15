<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    
    <title><?=$title;?></title>
  </head>
  <body>
  <nav>
    <header>
      <h1>AUDINUT</h1>
    </header>
    <ul>
      <li><a href="index.php?action=home">Home</a></li>
      <li><a href="index.php?action=edit">Cargar</a></li>
      <li><a href="index.php?action=listar">Listar</a></li>
    </ul>
  </nav>

  <main>
  <?=$output ?? ''?>

  
  </main>

  <footer>
  DNyAS
  </footer>
  </body>
</html>