<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
</head>
<body>
    <h1>Novo Cliente</h1>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" required>
        <label for="dt_nasc">Data de Nascimento</label>
        <input type="date" name="dt_nasc" id="dt_nasc" required>
        <label for="whatsapp">Whatsapp</label>
        <input type="text" name="whatsapp" id="whatsapp" required>
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" required>
        <label for="num">Número</label>
        <input type="number" name="num" id="num" required>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>