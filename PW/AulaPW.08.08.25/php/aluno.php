<?php

require "Aluno.class.php";
$aluno = new Aluno();

$con = $aluno->conectar();

if($con){
    $aluno->cadastrar("sd" , "sads" , 2534 , 645645);
}
else{
    echo "<script>alert('Erro o conectar ao db!')</script>";
}