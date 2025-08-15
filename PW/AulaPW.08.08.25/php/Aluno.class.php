<?php
class Aluno {
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function getRm() { return $this->rm; }
    public function getNome() { return $this->nome; }
    public function getEmail() { return $this->email; }
    public function getCpf() { return $this->cpf; }
    public function getId() { return $this->id; }

    public function setId($id) { $this->id = $id; }
    public function setRm($rm) { $this->rm = $rm; }
    public function setNome($nome) { $this->nome = $nome; }
    public function setEmail($email) { $this->email = $email; }
    public function setCpf($cpf) { $this->cpf = $cpf; }

    public function conectar() {
        $dns = "mysql:dbname=aluno;host=localhost"; 
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);           
            return true;
        } catch (\Exception $e) {           
            return false;
        }   
    }

    public function cadastrar($nome, $email, $rm , $cpf) {
        $sql = "INSERT INTO alunos SET nome = :n, email = :e, rm = :r, cpf = :c";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":r", $rm);
        $stmt->bindValue(":c", $cpf);
        return $stmt->execute();
    }

    public function consultar($email){
        $sql = "SELECT * from alunos where email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":e" , $email);
        $sql->execute();

        return $sql->rowCount() > 0;
    }
}
?>
