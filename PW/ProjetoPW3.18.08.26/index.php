<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <a href="produtos.php" class="sombra">Ver todos os produtos</a>
    <form action="" method="post" enctype="multipart/form-data">

    <Label for ="nome">Nome do Produto</Label>
        <input type="text" names="nome" placeholder="Insira seu nome: " required>
        <input type="textarea" names="descricao" placeholder="Insira a descricao: " required>
        <input type="number" name="valor" placeholder="Insira o valor:" required>

        <input type="file" name="foto [] multiple" required>

    </form>
</body>

</html>
