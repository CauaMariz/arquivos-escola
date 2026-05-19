<?php

require "Usuario.class.php";

$usuario = new Usuario();

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    echo "ID não informado, tente novamente mais tarde!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pag</title>
</head>
<body>
    <h2>Alteração de usuarios</h2>

      <form action="editar_submit.php" method = "post">
        <input type="text" name = "nome" placeholder = "Informe o nome: "> <br>
        <input type="email" name = "email" placeholder = "Informe seu email: "> <br>
        <input type="password" name = "senha" placeholder = "Informe sua senha: "> <br>

        <input type="submit" name = "btn" value = "Editar">
        <button type = "button" onclick = "location.href = 'index.php'">Ir para o login</button>
    </form>
</body>
</html>