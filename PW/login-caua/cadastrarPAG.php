<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
   h2{
    font-family: arial;
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form{
    display: block;
    background-color: rgba(206, 206, 206, 1);
    border-radius: 10px;
    width: fit-content;
    height: fit-content;
    padding: 20px;
    text-align: center;
}

form input{
    margin: 0 auto;
    padding: 8px;
    width: 300px;
    border-radius: 5px;
    border: 1px solid;
    margin-top: 10px;
    display: block;
}

form input[type=submit]{
    width: 320px;
}

form button{
    background-color: rgba(92, 226, 110, 1);
    border: 1px solid grey;
    padding: 7px;
    border-radius: 6px;
    color: black;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <form action="cadastrarConfig.php" method = "POST">
        <h2>Cadastro de usuarios</h2>
        <input type="text" name = "nome" placeholder = "Informe o nome: "> <br>
        <input type="email" name = "email" placeholder = "Informe seu email: "> <br>
        <input type="password" name = "senha" placeholder = "Informe sua senha: "> <br>

        <input type="submit" name = "btn" value = "Cadastrar">
        <button type = "button" onclick = "location.href = 'index.php'">Ir para o login</button>
    </form>
</body>
</html>