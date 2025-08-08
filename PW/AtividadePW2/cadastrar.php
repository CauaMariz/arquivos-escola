
<?php

$emailUser = $_POST["emailUser"];
$passUser = $_POST["passUser"];

if (isset($emailUser) && isset($passUser)){
    $cadastrar = new Usuario();
    $cadastrar->cadastrarUsuario($emailUser,$passUser);
}