<?php
include __DIR__ . '/conect.php';
$data = [];

$stmt = $pdo->prepare("SELECT CONCAT(Nombres,' ',Apellidos) as nomApe, id_datos_benef FROM datos_benef
WHERE  CONCAT(Nombres,' ',Apellidos) LIKE ? " );



    $stmt->execute(["%" . $_POST['search'] . "%"]);
 //$stmt->execute(["%" .'hec'. "%"]);
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) { 
      $data[] = [
        "D" => $row['nomApe'],
        "dTel" => $row['id_datos_benef']
          ]; 
    }
    ;


// devuelve resultado
if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;



