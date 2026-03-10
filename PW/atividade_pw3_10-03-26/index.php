<?php
require "Usuario.class.php";
$usuario = new Usuario();
$conn = $usuario->conecta();

if($conn){
    echo "<h1>Conectado ao Banco de Dados!</h1>";
}
else{
    echo "<h1>Nao foi possivel conectar ao Banco de Dados!</h1>";
}