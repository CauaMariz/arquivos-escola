<?php
session_start();
require "Aluno.class.php";
$aluno = new Aluno();

$nome = $_POST["nomeAluno"];
$email = $_POST["emailAluno"];
$rm = $_POST["rmAluno"];
$cpf = $_POST["cpfAluno"];

$con = $aluno->conectar();

if($con){
    $al = $aluno->consultar($email);

    if($al == 0){
        $aluno->cadastrar($nome , $email , $rm , $cpf);
        $_SESSION["nome"] = $nome;
        header("Location: home.php");
      
    }
    else{
        echo "<script>alert('Este usuario ja existe')</script>";
        echo "<script>location.href = 'home.php'</script>";
    }
}
else{
    echo "<script>alert('Erro o conectar ao db!')</script>";
}
