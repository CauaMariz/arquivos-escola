<?php
require "../Classes/Aluno.Class.php";
$Aluno = new Aluno();

if (!$Aluno) {
    echo "Conexao mal sucedida!";
    exit;
} else {
    echo "Conexao bem sucedida! <br>";
    $Aluno->setId("01");
    $Aluno->setNa("Caua");
    $Aluno->setRa("065");
    $Aluno->setPe("Manha");
    $Aluno->setCu("DS!");


    echo "ID: " . $Aluno->getId() . 
         "<br>Nome: " . $Aluno->getNa() . 
         "<br>RA: " . $Aluno->getRa() . 
         "<br>Período: " . $Aluno->getPe() . 
         "<br>Curso: " . $Aluno->getCu();
}

