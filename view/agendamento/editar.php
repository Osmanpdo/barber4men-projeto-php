<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar agendamento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../home/homepage.php">Editar Agendamento</a>
    </nav>

    <div class="alinhamento">
        <form action="" method="post">
            <div class="form-group">
                <label for="clienteId">Cliente ID: </label>
                <input type="number" class="form-control" name="clienteId" id="data" value="1" required>
            </div>
            <div class="form-group">
                <label for="servicoId">Serviço ID: </label>
                <input type="number" class="form-control" name="servicoId" id="data" value="1" required>
            </div>
            <div class="form-group">
                <label for="data">Data: </label>
                <input type="date" class="form-control" name="data" id="data" value="2024-06-10" required>
            </div>
            <div class="form-group">
                <label for="horario">horário</label>
                <input type="time" class="form-control" name="horario" id="horario" value="10:00" required>
            </div>
            <div class="form-group">
                <label for="duracao">Duração</label>
                <input type="time" class="form-control" name="duracao" id="duracao" value="01:30" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="" disabled>Selecione</option>
                    <option value="0">Pendente</option>
                    <option value="1" selected>Concluído</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>