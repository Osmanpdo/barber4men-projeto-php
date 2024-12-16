<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        <label for="valor">Valor</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" required>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>