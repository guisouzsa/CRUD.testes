<?php
try {
    $conexao = new PDO("mysql:host=localhost;dbname=products;charset=utf8mb4",
    "root", 
    "", 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
} catch (PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
}
 ?>
