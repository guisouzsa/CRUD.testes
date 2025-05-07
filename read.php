<?php
include 'conexao.php'; // Inclui a conexão com o banco

try {
    $stmt = $conexao->prepare("SELECT * FROM books");
    $stmt->execute();

    echo "<table border='1' width='100%'>
            <tr>
                <th>ID</th>
                <th>Título do Livro</th>
            </tr>";


    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>
                <td>{$rs->id_book}</td>
                <td>{$rs->title}</td>
              </tr>";
    }

    echo "</table>"; 
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
?>
