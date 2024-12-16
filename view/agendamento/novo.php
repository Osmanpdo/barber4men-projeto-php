<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo agendamento</title>
</head>
<body>
    <h1>Novo Agendamento</h1>

    <form action="" method="post">
        <label for="data">Data: </label>
        <input type="date" name="data" id="data" required>
        <label for="horario">horário</label>
        <input type="time" name="horario" id="horario" required>
        <label for="duracao">Duração</label>
        <input type="time" name="duracao" id="duracao" required>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="" selected disabled>Selecione</option>
            <option value="0">Pendente</option>
            <option value="1">Concluído</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>