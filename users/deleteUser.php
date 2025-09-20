<?php

require_once "../bd/bd.php";

$pdo = getConnection();
//como obtenerlos

try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $pdo->prepare("
     DELETE FROM users where id = :id
    ");

    $query->execute([
        ':id'     => $_POST['id']
    ]);

    echo json_encode(["result"=>"✅ Usuario eliminado correctamente"]);

    // echo json_encode($query);
}catch(PDOException $e){
    echo "❌ Error en la consulta: " . $e->getMessage();
}