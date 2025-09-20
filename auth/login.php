<?php

require_once "../bd/bd.php";

$pdo = getConnection();

try{
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    
    $query->execute([
        ':email'     => $_POST['email'],
        ':password' => $_POST['password']
    ]);
    
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if($user){
        // header('Location: ../dashboard/dashboard.php');
        echo json_encode(["code"=>201, "message"=>"bienvenido"]);
        return;
        // exit;
    }

    echo json_encode(["code"=>401, "message"=>"credenciales invalidas, intente nuevamente"]); 
    
}catch(PDOException $e){
    echo json_encode(["code"=>500, "message"=>"algo extraño paso :("]); 
}