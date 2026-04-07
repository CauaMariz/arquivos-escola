<?php
session_start();

require "Usuario.class.php";
require "conexao.php";

$usuario = new Usuario();
$conexao = $usuario->conecta();


if(isset($_POST["nome"], $_POST["email"], $_POST["senha"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(empty($nome) || empty($email) || empty($senha)){
        echo "Preencha todos os campos!";
        exit;
    }

    if($conexao){

        if($usuario->checkUser($email) > 0){
            echo "<script>alert(\"Esse usuario ja existe!\")</script>";
            echo "<script>window.location.href = \"index.php\"</script>";
            exit;
        } else {

            if($usuario->insertUser($nome,$email,$senha)){
                $_SESSION["nome"] = $nome;
                header("Location: index.php");
                exit;
            } else {
                echo "Erro ao cadastrar usuario";
            }

        }

    } else {
        echo "Conexao perdida!";
    }

} else {
    echo "É preciso inserir todos os dados!";
}
?>



