<?php 
    include 'conexao.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : "";

            if($product_name) {
                try {
                    $stmt = $conexao->prepare("INSERT INTO my_products (product_name) VALUES (?)");
                    $stmt->bindValue(1, $product_name);
                    $stmt->execute();
                        
                }catch (PDOException $erro) {
                    echo "Erro: " . $erro->getMessage();
                }
            }
        }
