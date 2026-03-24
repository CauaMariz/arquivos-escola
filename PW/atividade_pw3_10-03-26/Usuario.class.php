<?php
require "conexao.php";
class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $pdo;


  

    public function insertUser($nome, $email, $senha){
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":n" , $nome);
        $stmt->bindValue(":e" , $email);
        $stmt->bindValue(":s" , $senha);

        $stmt->execute();

        return $stmt;
    }

    public function checkUser($email){
        $sql = "SELECT * FROM usuarios WHERE email = :e";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e" , $email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
        public function checkPass($senha){
        $sql = "SELECT * FROM usuarios WHERE senha = :s";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":s" , $senha);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}