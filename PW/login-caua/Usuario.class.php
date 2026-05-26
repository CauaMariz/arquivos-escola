<?php


class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $pdo;

    function conecta(){
        $dns = "mysql:dbname=etimusuario;host=localhost";
        $user = "root";
        $pass = "";

        try{
            $this->pdo = new PDO($dns,$user,$pass);
            return true;
        }
        catch(\Throwable  $e){
            return false;
        }
    }
  

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
        $sql = "SELECT * FROM usuarios WHERE md5(senha) = :s";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":s" , $senha);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function listarUsers(){
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();
        return $stmt->fetchAll();
    }

      public function alterarUser($id,$nome, $email, $senha){
        $sql = "UPDATE usuarios SET nome = :n, email = :e, senha = :s WHERE id = :i";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":n" , $nome);
        $stmt->bindValue(":e" , $email);
        $stmt->bindValue(":s" , $senha);
        $stmt->bindValue(":i" , $id);

        $stmt->execute();
    }

        public function localizarUser($id){
        $sql = "SELECT *  FROM usuarios WHERE id = :i";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":i" , $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
