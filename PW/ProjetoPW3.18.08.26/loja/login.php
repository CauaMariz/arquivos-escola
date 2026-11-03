
<?php
require "./classe/Usuario.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usuario = new Usuario();
    
    if($usuario->checkPass($senha) > 0 && $usuario->checkUser($email) > 0){
        echo "<script>alert(\"Login realizado com sucesso! \")</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
    else{
        echo "<script>alert(\"Email ou senha errados.\")</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #101827, #1e3a5f);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: #ffffff;
            width: 350px;
            padding: 40px 30px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        form p {
            font-size: 28px;
            font-weight: bold;
            color: #1e3a5f;
            text-align: center;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 5px rgba(37, 99, 235, 0.3);
        }

        input[type="submit"] {
            background-color: #2563eb;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        @media (max-width: 400px) {
            form {
                width: 90%;
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
        <p>Login</p>
        <input type="email" maxlength="200" placeholder="Insira seu email: " name="email" required>
        <input type="password" minlength="8" maxlength="50" name="senha" placeholder="Insira sua senha: "  required>
        <input type="submit" value="Fazer login">
    </form>
</body>

</html>