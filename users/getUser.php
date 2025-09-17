<?php

require_once "../bd/bd.php";

$pdo = getConnection();
// TRAER USUARIO POR ID

$pdo = getConnection();
try{
    $query = $pdo->query("SELECT * FROM users WHERE id = ".$_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($query);
}catch(PDOException $e){
    echo "❌ Error en la consulta: " . $e->getMessage();
}

