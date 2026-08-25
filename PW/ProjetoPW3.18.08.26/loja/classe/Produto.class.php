<?php
class Produto{
    private $id_produto;
    private $nome;
    private $descricao;
    private $valor;
    private $pdo;

    public function conecta(){
        try {
            $dns = "mysql:dbname=loja_db;host=localhost";
            $dbUser= "root";
            $dbPass ="";
            $this->pdo = new PDO($dns,$dbUser,$dbPass);
            return true;
        } catch (\Throwable $th) {
           return false;

        }
    }

	    public function enviarProduto($nome, $descricao, $valor, $fotos = array()){
        
        $sql = "INSERT INTO produtos SET descricao =:d, nome_produto = :n, valor = :v";
        $sql = $this->pdo->prepare($sql);
        $sql ->bindValue(":d", $descricao);
        $sql ->bindValue(":n", $nome);
        $sql ->bindValue(":v", $valor);

        $isOk = $sql->execute();
        
        if( $isOk == true ){
            $id_produto = $this->pdo->LastInsertId();
        }

        if( count( $fotos ) > 0 ){
            for($i = 0; $i < count($fotos); $i++ ){
                $nome_foto = $fotos[$i];
                echo "<br>";

                $sql = "INSERT INTO imagens (nome_imagem, fk_id_produto) values (:n, :fk)";
                $sql = $this->pdo->prepare($sql);
                $sql ->bindValue(":n" , $nome_foto); 
                $sql ->bindValue(":fk", $id_produto);
                
                $isOk = $sql->execute();

                return $isOk;
            }
        }
    }
}

