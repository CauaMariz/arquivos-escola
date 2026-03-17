<?php
require "Usuario.class.php";
$usuario = new Usuario();
$usuario->conecta();

if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($usuario){
        if($usuario->checkUser($email) > 0){
            echo "<script>alert(\"Esse usuario ja existe!\")</script>";
            echo "<script>window.location.href = \"index.php\"</script>";
        }
        else{
            $usuario->insertUser($nome,$email,$senha);
            echo "Usuario inserido!";
            
        }
    }
    else{echo "Conexao perdida!";}
}
else{
    echo "É preciso inserir todos os dados!";
}



