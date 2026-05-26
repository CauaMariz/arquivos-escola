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

if($conn){
    $user = $usuario->localizarUser($id);

    if (empty($user)) {
        echo "Nao ha usuarios para listar";
    } else {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pag</title>

    <style>
        *{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        div{
            margin: 0 auto;
            
        }
        .campo1{
            width: fit-content;
            padding: 10px;
            border: 1px solid black;
            width: 300px;
            padding: 10px;
            background-color: grey;
            color: whitesmoke;
            border-radius: 10px;
        }
         .campo2{
            width: 300px;
            padding: 10px;
            background-color: grey;
            color: whitesmoke;
            border-radius: 10px;
        }
        .campo2 input{
            width: 250px;
            height: 30px;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid grey;
            padding-left: 10px;
        }
        .btnEditar{margin-left: 5px;}
        button{
            margin-left: 5px;
            width: 250px;
             height: 30px;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid grey;
            padding-left: 10px;
        }
    </style>
</head>
<body>
<?php
             foreach ($user as $item) {
                    $nome = $item['nome'];
                    $email = $item['email'];
    ?>

    <div class="campo1">
    <h2>Alteração de usuarios</h2>

    <h2>Seus dados:</h2>

    <p>Seu nome: <?php echo $item['nome']?></p>
    <p>Seu email: <?php echo $item['email']?></p>
    
</div>

    


<div class="campo2">


      <form action="editar_submit.php?id=<?php echo $item['id'];?>" id = "editarLink" method = "post">
        <input type="text" name = "nome" placeholder = "Informe o nove nome: "> <br>
        <input type="email" name = "email" placeholder = "Informe seu novo email: "> <br>
        <input type="password" name = "senha" placeholder = "Informe sua nova senha: "> <br>

        <input type="submit" name = "btn" value = "Editar" class = "btnEditar">

        <button type = "button" onclick = "location.href = 'index.php'">Ir para o login</button>
    </form>
</div>
    <?php } ?>
    <?php }}?>

</body>
</html>
