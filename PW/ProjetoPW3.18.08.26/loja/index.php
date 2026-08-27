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
</head>

<body>

    
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
