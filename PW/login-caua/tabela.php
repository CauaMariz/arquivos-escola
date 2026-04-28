<?php
require "Usuario.class.php";
$usuario = new Usuario();

$con = $usuario->conecta();

if($con){
    $user = $usuario->listarUsers();

    if(empty($user)){
        echo "Nao ha usuarios para listar";

    }
    else{
        foreach($user as $item){
            $id = $item['id'];
            $nome = $item['nome'];
            $email = $item['email'];

            echo "Codigo $id - Nome $nome - Email $email <br>";
        }
    }
}
else{
    echo "Banco indisponivel, tente mais tarde!";
}
