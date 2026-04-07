
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de usuarios</h2>
    <form action="cadastrarConfig.php" method = "POST">
        <input type="text" name = "nome" placeholder = "Informe o nome: "> <br>
        <input type="email" name = "email" placeholder = "Informe seu email: "> <br>
        <input type="password" name = "senha" placeholder = "Informe sua senha: "> <br>

        <input type="submit" name = "btn" value = "Cadastrar">
        <button type = "button" onclick = "location.href = 'index.php'">Ir para o login</button>
    </form>
</body>
</html>