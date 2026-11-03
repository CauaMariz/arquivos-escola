<?php
require "./classe/Usuario.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<script>alert(\"Algum campo está faltando\")</script>";
    } else {
        $usuario = new Usuario();

        if ($usuario->insertUser($nome, $email, $senha)) {
            echo "<script>alert(\"Cadastro realizado com sucesso!\")</script>";
        } else {
            echo "<script>alert(\"Não foi possivel realizar o cadastro\")</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra-se</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #101827, #1e3a5f);
            min-height: 100vh;
        }

        .navbar {
            background-color: #101827 !important;
            padding: 15px 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            color: white !important;
            font-size: 23px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #dbeafe !important;
            font-size: 15px;
            margin: 0 8px;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #60a5fa !important;
        }

        .dropdown-menu {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 8px;
            padding: 8px;
        }

        .dropdown-item {
            color: #dbeafe;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .dropdown-item:hover {
            background-color: #2563eb;
            color: white;
        }

        .navbar-toggler {
            border-color: #64748b;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        .conteudo {
            color: white;
            text-align: center;
            margin-top: 100px;
        }

        .conteudo h1 {
            font-size: 40px;
            font-weight: bold;
        }

        .conteudo p {
            color: #cbd5e1;
            font-size: 18px;
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
            margin: 0 auto;
            margin-top: 10vw;
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

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">Minha Loja</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal"
                aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarPrincipal">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="listarProdutos.php">Produtos cadastrados</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="inserirProduto.php">Inserir produto</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gerenciar usuários
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>
                                <a class="dropdown-item" href="cadastro.php">
                                    Inserir usuário
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="listarUsuarios.php">
                                    Listar usuários
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="atualizarUsuario.php">
                                    Atualizar usuário
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="deletarUsuario.php">
                                    Deletar usuário
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <form action="cadastro.php" method="post">
        <p>Cadastro</p>

        <input type="text" minlength="2" maxlength="200" placeholder="Insira seu nome: " name="nome" required>
        <input type="email" maxlength="200" placeholder="Insira seu email: " name="email" required>
        <input type="password" minlength="8" maxlength="50" name="senha" placeholder="Insira sua senha:" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>