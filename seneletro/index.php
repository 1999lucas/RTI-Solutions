<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
</head>
<body>
    <form method="GET" action="calculo-luz.php">
        <h1>Cálculo da Conta de Luz</h1>

        <div class="input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required  />
        </div>

        <div class="input-group">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço (Rua e número)" required />
        </div>

        <div class="input-group">
            <label for="consumo">Consumo</label>
            <input type="number" name="consumo" id="consumo" placeholder="Digite seu consumo em KW/h" required />
        </div>

      

        <button>Enviar</button>
    </form>
</body>
</html>