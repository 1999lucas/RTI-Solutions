<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles-global.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHL Fretes</title>
</head>
<body>
    <form method="GET" action="aumento-salario.php">
        <h1>Cálculo do Aumento do Salário</h1>

        <div class="input-group">
            <label for="nome">Nome do Funcionário</label>
            <input type="text" name="nome" id="nome" required />
        </div>

        <div class="input-group">
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="salario" required/>
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>