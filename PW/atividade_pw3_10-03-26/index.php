<?php

require "Usuario.class.php";
$usuario = new Usuario();
$conn = $usuario->conecta();

if($conn){
    ?>
    <form action = "login.php" method = "POST">
        <input type = "text" name = "nome" placeholder = "Digite seu nome:" required> <br>
        <input type = "email" name = "email" placeholder = "Digite seu email:" required> <br>
        <input type = "password" name = "senha" placeholder = "Digite sua senha" required> <br>
        

        <button type = "submit" id = "login"> </button>
        <a href="cadastrar.php" >Novo aqui? cadastre-se</a>
</form>
<?php
}

