<?php

function getConnection() {
    $host = "localhost";
    $dbname = "clases";
    $username = "root";
    $password = "Rammirtson@123";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        echo "❌ Error en la conexión: " . $e->getMessage();
    }
}