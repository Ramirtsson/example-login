<?php

require_once "../bd/bd.php";

$pdo = getConnection();
//como obtenerlos

try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $pdo->prepare("
        INSERT INTO users (name, lastname, age, email, password) 
        VALUES (:name, :lastname, :age, :email, :password)
    ");

    $query->execute([
        ':name'     => $_POST['name'],
        ':lastname' => $_POST['lastname'],
        ':age'      => $_POST['age'],
        ':email'    => $_POST['email'],
        ':password' => $_POST['password']
    ]);

    echo json_encode(["result"=>"✅ Usuario insertado correctamente"]);

    // echo json_encode($query);
}catch(PDOException $e){
    echo "❌ Error en la consulta: " . $e->getMessage();
}
