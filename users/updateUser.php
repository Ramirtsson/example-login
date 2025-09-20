<?php

require_once "../bd/bd.php";

$pdo = getConnection();

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->prepare("
        UPDATE users SET name = :name,  lastname = :lastname, age = :age, 
            email = :email, password = :password
        WHERE id = :id
    ");

    $query->execute([
        ':name'     => $_POST['name'],
        ':lastname' => $_POST['lastname'],
        ':age'      => $_POST['age'],
        ':email'    => $_POST['email'],
        ':password' => $_POST['password'],
        ':id'       => $_POST['id'] 
    ]);

    echo json_encode(["result"=>"✅ Usuario actualizado correctamente"]);

} catch(PDOException $e) {
    echo "❌ Error en la consulta: " . $e->getMessage();
}
