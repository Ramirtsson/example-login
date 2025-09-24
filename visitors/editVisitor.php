<?php

require_once "../bd/bd.php";

$pdo = getConnection();

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("
        UPDATE visitantes SET name = :name, enterprise  = :enterprise, post = :post, 
            email = :email, id = :id, phone = :phone, city = :city, reason = :reason
        WHERE id = :id
    ");

    $query->execute([
        ':name'     => $_POST['name'],
        ':enterprise' => $_POST['enterprise'],
        ':post'      => $_POST['post'],
        ':email'    => $_POST['email'],
        ':id' => $_POST['id'],
        ':phone' => $_POST['phone'],
        ':city'       => $_POST['city'],
        ':reason'       => $_POST['reason'] 
    ]);

        echo json_encode(["code"=>201, "message"=>"Actualizacion correcta"]);

    
    }catch(PDOException $e) {
        echo json_encode(["code"=>401, "message"=>"Actualizacion fallida"]);
    }
