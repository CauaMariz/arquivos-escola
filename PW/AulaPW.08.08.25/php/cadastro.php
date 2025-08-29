<?php

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
    }
    else{
        echo "<script>alert('Este usuario ja existe')</script>";
    }
}
else{
    echo "<script>alert('Erro o conectar ao db!')</script>";
}
