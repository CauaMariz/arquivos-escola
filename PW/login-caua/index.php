<?php

require "Usuario.class.php";
$usuario = new Usuario();
$conn = $usuario->conecta();

if ($conn) {
?>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            justify-items: center;
            align-content: center;
        }

        #formLogin {
            display: block;
            background-color: darkcyan;
            align-content: center;
            padding-top: 30px;
            height: auto;
            min-height: 400px;
            width: 600px;
            border-radius: 20px;
            justify-items: center;
            padding-bottom: 30px;
        }

        input,
        button {
            display: flex;
            margin: 0 auto;
        }

        input {
            border: 1px solid grey;
            height: 50px;
            width: 350px;
            padding-left: 15px;
            border-radius: 9px;
        }

        input:focus {
            outline: 1px solid greenyellow;
        }

        button {
            height: 30px;
            width: 100px;
            border: 1px solid grey;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            transition: 1.5s;
            cursor: pointer;
            background-color: whitesmoke;
        }

        button:hover {
            background-color: palegreen;
            transition: .5s;
        }

        a {
            color: white;
            font-style: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-decoration: none;
            font-weight: bold;
            margin-left: 20px;
            transition: 1.5s;
        }

        a:hover {
            font-size: 20px;
            transition: .5s;
        }

        h3 {
            color: white;
            font-style: normal;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-decoration: none;
            font-weight: bold;
            margin: 0 auto;
            font-size: 34px;
        }

        #nomeLogin {
            margin-top: 50px;
        }
    </style>
    <form action="login.php" method="POST" id="formLogin">
        <h3>Login</h3>
        <input type="text" name="nome" placeholder="Digite seu nome:" required id="nomeLogin"> <br>
        <input type="email" name="email" placeholder="Digite seu email:" required id="emailLogin"> <br>
        <input type="password" name="senha" placeholder="Digite sua senha" required id="senhaLogin"> <br>


        <button type="submit" id="btnLogin">Logar</button> <br>
        <a href="cadastrarPAG.php" id="linkCadastro">Novo aqui? cadastre-se</a>
    </form>
<?php
}
