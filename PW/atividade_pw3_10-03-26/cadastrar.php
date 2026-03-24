<?php
require "Usuario.class.php";
require "conexao.php";
$usuario = new Usuario();
 
$conexao = conecta();
$usuario = $conexao;

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($usuario){
        if($usuario->checkUser($email) > 0){
            echo "<script>alert(\"Esse usuario ja existe!\")</script>";
            echo "<script>window.location.href = \"index.php\"</script>";
            exit;
        }
        else{
            $usuario->insertUser($nome,$email,$senha);
            if($usuario){
                echo"Usuario cadastrado com sucesso";
                $_SESSION["nome"] = $nome;
                header("Location: home.php");
            }else{
                echo"Erro ao cadastrar usuario";
            }            
        }
    }
    else{echo "Conexao perdida!";}
}
else{
    echo "É preciso inserir todos os dados!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de usuarios</h2>
    <form action="" method = "POST">
        <input type="text" name = "nome" placeholder = "Informe o nome: "> <br>
        <input type="text" name = "email" placeholder = "Informe seu email: "> <br>
        <input type="password" name = "senha" placeholder = "Informe sua senha: "> <br>

        <input type="submit" name = "btn" value = "Cadastrar">
    </form>
</body>
</html>


