<?php
require "Banco.class.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Banco XYZ</h1>
    <h3>Correntista</h3>

    <?php
    $banco = new Banco();
    $con = $banco->conectar();

    if ($con) {
        $dados = $banco->localizarTitular(1);

        if (!empty($dados)) {
    ?>
            Titular:<?php echo $dados['titular']; ?> <br>
            Agencia:<?php echo $dados['agencia']; ?> <br>
            Conta:<?php echo $dados['conta']; ?> <br>
            Saldo:<?php echo $dados['saldo']; ?> <br>
    <?php
        } else {
            echo "<script>alert('Titular nao encontrado')</script>";
            exit;
        }
    } else {
        echo "<script>alert('Banco indisponivel! Tente mais tarde!')</script>";
        exit;
    }
    ?>

    <a href="sair.php">Sair</a>
    <hr>
    <h3>Movimentacao/Extrato</h3> <br>
    <a href="ad_transacao.php">Adicionar transicao</a>
</body>

</html>