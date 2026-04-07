<?php
session_start();

require "Usuario.class.php";
require "conexao.php";

$usuario = new Usuario();
$conn = $usuario->conecta();

if($conn){

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])){

        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $userEmail = $usuario->checkUser($email);
        $userSenha = $usuario->checkPass(   $senha);

        if($userEmail <= 0){
            echo "<script>alert(\"Email incorreto!\")</script>";
        }
        else if($userSenha <= 0){
            echo "<script>alert(\"Senha incorreta!\")</script>";
        }
        else{
            $_SESSION["nome"] = $nome;
            echo "<script>alert(\"Login realizado com sucesso!\")</script>";
            echo "<script>window.location.href = \"index.php\"</script>";
            exit;
        }
    }

}else{
    echo "Banco indisponivel, tente mais tarde";
}