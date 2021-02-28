<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
</head>
<body>
    <form method="GET" action="calcula-frete.php">
        <h1>Cálculo de Frete</h1>

        <div class="input-group">
            <label for="origem">Cidade de Origem</label>
            <input type="text" name="origem" id="origem" required />
        </div>

        <div class="input-group">
            <label for="destino">Cidade de Destino</label>
            <input type="text" name="destino" id="destino" required/>
        </div>

        <div class="input-group">
            <label>Distância em KM</label>
            <input type="number" name="distancia" id="distancia" required/>
        </div>

        <div class="input-group">
            <label for="pedagios">Quantidade de Pedágios</label>
            <input type="number" name="pedagios" id="pedagios" required/>
        </div>

     

        <button>Enviar</button>
    </form>
</body>
</html>