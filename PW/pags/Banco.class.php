<?php

class Banco
{
    private $pdo;
    public function conectar()
    {
        try {
            $dbName = "mysql:dbname=caixaeletronico;host=localhost";
            $dbUser = "root";
            $dbPass = "";

            $this->pdo = new PDO($dbName, $dbUser, $dbPass);
            return true;
        } catch (Exception $e) {
            echo "ERRO: " . $e->getMessage();
            return false;
            exit;
        }
    }

    public function localizarTitular($id)
    {
        $sql = "SELECT * from conta where id = :id";
        $sqlPdo = $this->pdo->prepare($sql);

        $sqlPdo->bindValue(":id", $id);
        $sqlPdo->execute();

        if ($sqlPdo->rowCount() > 0) {
            $dados = $sqlPdo->fetch();
        } else {
            $dados = array();
        }
        return $dados;
    }
}
