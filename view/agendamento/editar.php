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
        <input type="date" name="data" id="data" value="2024-06-10" required>
        <label for="horario">horário</label>
        <input type="time" name="horario" id="horario" value="10:00" required>
        <label for="duracao">Duração</label>
        <input type="time" name="duracao" id="duracao" value="01:30" required>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="" disabled>Selecione</option>
            <option value="0">Pendente</option>
            <option value="1" selected>Concluído</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>