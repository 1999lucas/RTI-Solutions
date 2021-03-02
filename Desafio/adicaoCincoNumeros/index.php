<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adição de Cinco Números</title>
</head>
<body>
    <form method="POST" action="adicaoCincoNumeros.php">
        <h1>Adição de Cinco Números</h1>
        <div><center>Escolha Cinco Números:</center></div>
        <div class="input-group">
            <label for="numero1"Número 1</label>
            <input type="number" name="numero1" id="numero1" placeholder="Digite o Primeiro Número" required />
        </div>
        <div class="input-group">
            <label for="numero2"Número 2</label>
            <input type="number" name="numero2" id="numero2" placeholder="Digite o Segundo Número" required />
        </div>
        <div class="input-group">
            <label for="numero3"Número 3</label>
            <input type="number" name="numero3" id="numero3" placeholder="Digite o Terceiro Número" required />
        </div>
        <div class="input-group">
            <label for="numero4"Número 4</label>
            <input type="number" name="numero4" id="numero4" placeholder="Digite o Quarto Número" required />
        </div>
        <div class="input-group">
            <label for="numero5"Número 5</label>
            <input type="number" name="numero5" id="numero5" placeholder="Digite o Quinto Número" required />
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>