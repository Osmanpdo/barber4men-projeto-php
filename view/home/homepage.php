<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../home/homepage.php">GESTÃO DE PRODUTOS E SERVIÇOS</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CLIENTES
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../index.php?classe=Cliente&metodo=create">Novo</a>
                            <a class="dropdown-item" href="../../index.php?classe=Cliente&metodo=edit&id=1">Editar</a>
                            <a class="dropdown-item" href="../../index.php?classe=Cliente&metodo=delete&id=1">Deletar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php?classe=Cliente&metodo=show&id=1">Mostrar Registro</a>
                            <a class="dropdown-item" href="../../index.php?classe=Cliente&metodo=index">Mostrar Todos Registros</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVIÇOS
                        </button>   
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../index.php?classe=Servico&metodo=create">Novo</a>
                            <a class="dropdown-item" href="../../index.php?classe=Servico&metodo=edit&id=1">Editar</a>
                            <a class="dropdown-item" href="../../index.php?classe=Servico&metodo=delete&id=1">Deletar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php?classe=Servico&metodo=show&id=1">Mostrar Registro</a>
                            <a class="dropdown-item" href="../../index.php?classe=Servico&metodo=index">Mostrar Todos Registros</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRODUTOS
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../index.php?classe=Produto&metodo=create">Novo</a>
                            <a class="dropdown-item" href="../../index.php?classe=Produto&metodo=edit&id=1">Editar</a>
                            <a class="dropdown-item" href="../../index.php?classe=Produto&metodo=delete&id=1">Deletar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php?classe=Produto&metodo=show&id=1">Mostrar Registro</a>
                            <a class="dropdown-item" href="../../index.php?classe=Produto&metodo=index">Mostrar Todos Registros</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            AGENDAMENTOS
                        </button>   
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../index.php?classe=Agendamento&metodo=create">Novo</a>
                            <a class="dropdown-item" href="../../index.php?classe=Agendamento&metodo=edit&id=1">Editar</a>
                            <a class="dropdown-item" href="../../index.php?classe=Agendamento&metodo=delete&id=1">Deletar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php?classe=Agendamento&metodo=show&id=1">Mostrar Registro</a>
                            <a class="dropdown-item" href="../../index.php?classe=Agendamento&metodo=index">Mostrar Todos Registros</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            COMPRAS
                        </button>   
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../../index.php?classe=Compra&metodo=create">Novo</a>
                            <a class="dropdown-item" href="../../index.php?classe=Compra&metodo=edit&id=1">Editar</a>
                            <a class="dropdown-item" href="../../index.php?classe=Compra&metodo=delete&id=1">Deletar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../../index.php?classe=Compra&metodo=show&id=1">Mostrar Registro</a>
                            <a class="dropdown-item" href="../../index.php?classe=Compra&metodo=index">Mostrar Todos Registros</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>   
</body>
</html>