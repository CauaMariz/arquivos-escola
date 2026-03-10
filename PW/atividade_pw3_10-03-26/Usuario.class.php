<?php
class Usuario{
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $pdo;


    public function conecta(){
        $dns = "mysql:dbname=etimusuario;host=localhost";
        $user = "root";
        $pass = "";

        try{
            $this->pdo = new PDO($dns,$user,$pass);
            return true;
        }
        catch(\Throwble $e){
            return false;
        }
    }
}