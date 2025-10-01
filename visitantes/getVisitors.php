<?php

require_once "../bd/bd.php";

$pdo = getConnection();
try{
    $query = $pdo->query("SELECT * FROM visitantes")->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($query);
}catch(PDOException $e){
    echo "❌ Error en la consulta: " . $e->getMessage();
}