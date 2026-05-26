<?php
require "Usuario.class.php";

$usuario = new Usuario();

$conn = $usuario->conecta();

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    echo "ID não informado, tente novamente mais tarde!";
    exit;
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario->alterarUser($id,$nome,$email,$senha);
echo "<script>alert('Credenciais alteradas!')</script>";