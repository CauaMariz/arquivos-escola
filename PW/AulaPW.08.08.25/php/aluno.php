<?php

require "Aluno.class.php";
$aluno = new Aluno();

$con = $aluno->conectar();

if($con){
    $al = $aluno->consultar("saads");

    if($al == 0){
        $aluno->cadastrar("sd" , "saads" , 2534 , 645645);
    }
    else{
        echo "<script>alert('Este usuario ja existe')</script>";
    }
}
else{
    echo "<script>alert('Erro o conectar ao db!')</script>";
}