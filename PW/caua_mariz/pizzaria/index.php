<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="calculo.php" method = "post">
        <label for="sabor"> Sabor da Pizza: </label>

        <select name="operacao" id="operacao">
            <option value="1">Frango - R$ 45,00</option>
            <option value="2">Atum - R$ 60,00</option>
            <option value="3">Ovo - R$ 65,00</option>
            <option value="4">Calabresa - R$ 30,00</option>
        </select>

        <fieldset>
            <legend>Adicionais: </legend>
            <input type="radio" name = "adicional" value = "1">Borda de Catupiry <br>
            <input type="radio" name = "adicional" value = "1">Borda de Cheddar
        </fieldset>

        <fieldset>
            <legend>Refrigerantes:</legend>
            <input type="checkbox" name = "coca" value = "Coca-Cola"> Coca-Cola <br>
            <input type="checkbox" name = "guarana" value = "Guaraná"> Guaraná
        </fieldset>

        <button type = "submit">Calcular</button>
    </form>
</body>
</html>