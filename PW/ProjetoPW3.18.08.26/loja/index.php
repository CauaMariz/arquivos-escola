<?php

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];

    $fotos = array();

    if (isset($_FILES['foto'])) {

        for ($i = 0; $i < count($_FILES['foto']['name']); $i++) {

            if ($_FILES['foto']['type'][$i] == "image/png") {

                $tipo = ".png";

            } elseif ($_FILES['foto']['type'][$i] == "image/jpeg") {

                $tipo = ".jpg";

            } else {

                $tipo = "outro";
            }

            if ($tipo == "outro") {

                ?>
                <script>
                    alert("Só é possível enviar arquivos PNG e JPG");
                </script>
                <?php

            } else {

                $nome_arquivo = md5(
                    $_FILES['foto']['name'][$i] . rand(1, 999) . $tipo
                ) . $tipo;

                move_uploaded_file(
                    $_FILES['foto']['tmp_name'][$i],
                    'imagens/' . $nome_arquivo
                );

                array_push($fotos, $nome_arquivo);
            }
        }

        if (!empty($nome) && !empty($descricao) && !empty($valor) && !empty($fotos)) {

            require 'classe/Produto.class.php';

            $p = new Produto();

            $p->conecta();

            $p->enviarProduto(
                $nome,
                $descricao,
                $valor,
                $fotos
            );

        } else {

            ?>
            <script>
                alert("Preencha os campos obrigatórios");
            </script>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css">

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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">Minha Loja</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarPrincipal" aria-controls="navbarPrincipal"
                aria-expanded="false" aria-label="Abrir menu">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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


    
    <form action="index.php" method="post" enctype="multipart/form-data">
        
        <label for="nome">Nome do Produto</label>
        
        <input
        type="text"
        name="nome"
        placeholder="Insira o nome"
        required 
        class = "input"
        >
        
        <textarea
        name="descricao"
        placeholder="Insira a descrição"
        required
        maxlength = "200"
        ></textarea>
        
        <input
        type="number"
        name="valor"
        placeholder="Insira o valor"
        required
        class = "input"
        >
        
        <input
        type="file"
        name="foto[]"
        multiple
        required
        class = "inputFile"
        >
        
        <input type="submit" value="Enviar" class = "inputSubmit">
        
        <a href="classe/produtos.php" class="sombra">
            Ver todos os produtos
        </a>
    </form>
    
</body>

</html>
