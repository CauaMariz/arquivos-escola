<?php
require "Usuario.class.php";
require "conexao.php";

if($conn){
    if (isset($_POST['nome'])){
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $user = $usuario -> checkUser($email);

        if($user){
            
        }

    }


    }else{
    echo "Banco indisponivel, Tente mais tarde";
}