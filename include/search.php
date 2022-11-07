<?php
include __DIR__ . '/conect.php';
session_start();
// realiza la búsqueda
$areaoperativa=$_SESSION['AOP'] ;
$data = [];

if($_SESSION['tipo']== 0){



  //  $stmt = $pdo->prepare("SELECT CONCAT(Nombre,' ',Apellido) as nomApe, idPersona FROM persona WHERE CONCAT(Nombre,' ',Apellido) LIKE ? ");
  $stmt = $pdo->prepare("SELECT CONCAT(Nombre,' ',Apellido) as nomApe, idPersona, AOP FROM persona 
inner join aopzonas on AOP=idaop
WHERE AOP = $areaoperativa  AND CONCAT(Nombre,' ',Apellido) LIKE ? " );
}

else {
$stmt = $pdo->prepare("SELECT CONCAT(Nombre,' ',Apellido) as nomApe, idPersona, AOP FROM persona 
inner join aopzonas on AOP=idaop
WHERE  CONCAT(Nombre,' ',Apellido) LIKE ? " );

}


    $stmt->execute(["%" . $_POST['search'] . "%"]);
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) { 
      $data[] = [
        "D" => $row['nomApe'],
        "dTel" => $row['idPersona']
          ]; 
    }
    ;


// devuelve resultado
if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;

