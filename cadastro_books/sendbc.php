<?php
include 'conexao.php'; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = isset($_POST["title"]) ? $_POST["title"] : "";

        if (!empty($title)) {
            try {
                $stmt = $conexao->prepare("INSERT INTO books (title) VALUES (?)");
                $stmt->bindValue(1, $title);

                if ($stmt->execute()) {
                    echo "Livro cadastrado com sucesso!";
                } else {
                    echo "Erro ao cadastrar.";
                }
            } catch (PDOException $erro) {
                echo "Erro: " . $erro->getMessage();
            }
        } else {
            echo "O campo título não pode estar vazio!";
        }
    }
?>
