<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Serviço</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Novo Serviço</h1>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        <label for="valor">Valor</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <textarea name="descricao" id="descricao" required></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>