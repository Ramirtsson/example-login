<?php
//conexion de BD
require_once "../bd/bd.php";
//como obtenerlos con la funcion getconnection y alamacenarla en pdo
$pdo = getConnection();

try{
    //configura PDO para que lance excepciones si ocurre un error en lugar de fallar silenciosamente. Esto es útil para depurar.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM visitantes WHERE id =:id");
//pasa los parametreos
    $query->execute([
        ':id'=> $_GET['id'],
    ]);
   $new = $query->fetch(PDO::FETCH_ASSOC);
//envia json de respuesta
    echo json_encode(["code"=>201, "message"=> $new]);
}catch(PDOException $e){
    echo json_encode([ "code"=>500, "message"=>"algo extraño paso :("]);
}
