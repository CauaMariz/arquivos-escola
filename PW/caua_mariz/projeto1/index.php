<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <p class = "title">Calculadora</p>

    <form action="calculoPHP.php" method = "post">
        <label for="vlr1">Valor 1: </label>
        <input type="number" name = "vlr1" required>
        <label for="vlr2">Valor 2: </label>
        <input type="number" name = "vlr2" required>

        <select name="operacao" id="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtracao</option>
            <option value="multiplicacao">Multiplicacao</option>
            <option value="divisao">Divisão</option>
        </select>

        <button type = "submit">Calcular</button>

    </form>
</body>
</html>