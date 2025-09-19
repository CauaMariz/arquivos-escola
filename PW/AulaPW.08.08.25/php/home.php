<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        if(isset($_SESSION["nome"])){
            $nomeAluno = $_SESSION["nome"];
            echo "<h1 class=\"bemVindo\">Bem vindo $nomeAluno!</h1>";
        }
    ?>
    <form action="cadastro.php" method="post">

        <p class="title">Cadastra-se</p>

        <input type="text" placeholder="Nome: " required name="nomeAluno">
        <input type="email" placeholder="Email: " required name="emailAluno">

        <input type="number" placeholder="RM: " required name="rmAluno">
        <input type="number" placeholder="CPF: " required name="cpfAluno">

        <ul class="lista">
            <li class="li1">Manter-me logado</li>
            <input type="checkbox">
            <li class="li2">Já tem uma conta?</li>
        </ul>

        <button class="btnCadastrar" type="submit">Cadastrar</button>
    </form>
</body>

</html>
