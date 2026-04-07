<?php

require "Usuario.class.php";
$usuario = new Usuario();
$conn = $usuario->conecta();

if($conn){
    ?>

    <h3>Login</h3>
    <form action = "login.php" method = "POST">
        <input type = "text" name = "nome" placeholder = "Digite seu nome:" required> <br>
        <input type = "email" name = "email" placeholder = "Digite seu email:" required> <br>
        <input type = "password" name = "senha" placeholder = "Digite sua senha" required> <br>
        

        <button type = "submit" id = "login">Logar</button> <br>
        <a href="cadastrarPAG.php" >Novo aqui? cadastre-se</a>
</form>
<?php
}

