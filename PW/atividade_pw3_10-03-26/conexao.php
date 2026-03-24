<?php
  require "Usuario.class.php";
  
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