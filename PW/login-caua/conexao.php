<?php
function conecta(){
    $dns = "mysql:dbname=etimusuario;host=localhost";
    $user = "root";
    $pass = "";

    try{
        $pdo = new PDO($dns,$user,$pass);
        return $pdo;
    }
    catch(\Throwable $e){
        return false;
    }
}