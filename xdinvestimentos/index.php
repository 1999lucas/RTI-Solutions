<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD Investimentos</title>
</head>
<body>
    <form method="GET" action="conversao-monetaria.php">
        <h1>Conversão Monetária</h1>

        <div class="input-group">
            <label for="real">Valor em Reais (R$)</label>
            <input type="number" name="real" id="real" required />
        </div>

        <div><center>Você quer converter para:</center></div>

        <div class="input-group">
            <label for="dolar">Dólar</label>
            <input type="radio" name="moeda" id="dolar" value="Dólar" required />
        </div>

        <div class="input-group">
            <label for="euro">Euro</label>
            <input type="radio" name="moeda" id="euro" value="Euro" required />
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>