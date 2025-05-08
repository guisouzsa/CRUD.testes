<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=i, initial-scale=1.0">
    <title>Cadastro de produtos </title>
</head>
<body>
    <h1>Qual produto você deseja cadastrar?</h1>
    <form action="enviar.php" method="POST">
        <label for="product_name"></label>
        <input type="text"  name="product_name" id="product_name" require>
        <input type="submit">
    </form>
</body>
</html>