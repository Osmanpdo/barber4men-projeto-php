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
        <input type="text" name="nome" id="nome" value="João Silva" required>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="123.456.789-00" required>
        <label for="dt_nasc">Data de Nascimento</label>
        <input type="date" name="dt_nasc" id="dt_nasc" value="1990-05-21" required>
        <label for="whatsapp">Whatsapp</label>
        <input type="text" name="whatsapp" id="whatsapp" value="(11) 91234-5678" required>
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" value="Rua das Flores" required>
        <label for="num">Número</label>
        <input type="number" name="num" id="num" value="123" required>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="Centro" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>