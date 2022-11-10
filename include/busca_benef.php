<?php
include __DIR__ . '/conect.php';
//include __DIR__ . '/funciones.php';
try {



//$sql='call lista_simple;';

//$benef = $pdo->query($sql);
 $title = 'Buscar caso';



}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
  


 include  __DIR__ . '/../templates/busca_benef.html.php';



