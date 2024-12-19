<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Compra</title>
</head>
<body>
    <h1>Nova Compra</h1>

    <form action="" method="post">
        <label for="clienteId">Cliente ID: </label>
        <input type="number" name="clienteId" id="data" required>
        <label for="produtoId">Produto ID: </label>
        <input type="number" name="produtoId" id="data" required>
        <label for="data">Data: </label>
        <input type="date" name="data" id="data" required>
        <label for="horario">Horário</label>
        <input type="time" name="horario" id="horario" required>
        <label for="qtd">Quantidade</label>
        <input type="number" name="qtd" id="qtd" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>