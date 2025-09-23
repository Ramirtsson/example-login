<?php

require_once "../bd/bd.php";

$pdo = getConnection();
//como obtenerlos

try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $pdo->prepare("
        INSERT INTO visitantes (name, enterprise, post, email, phone, city, reason) 
        VALUES (:name, :enterprise, :post, :email, :phone, :city, :reason)
    ");

    $query->execute([
        ':name'     => $_POST['name'],
        ':enterprise' => $_POST['enterprise'],
        ':post'      => $_POST['post'],
        ':email'    => $_POST['email'],
        ':phone' => $_POST['phone'],
        ':city'    => $_POST['city'],
        ':reason' => $_POST['reason']
    ]);

    echo json_encode(["code"=>201, "message"=>"visitante registrado"]);

    // echo json_encode($query);
}catch(PDOException $e){
    echo json_encode([ "code"=>500, "message"=>"algo extraño paso :("]);
}
