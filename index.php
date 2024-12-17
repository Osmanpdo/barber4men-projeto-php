<?php

include_once __DIR__ . '/controller/AgendamentoController.php';
include_once __DIR__ . '/controller/ClienteController.php';
include_once __DIR__ . '/controller/CompraController.php';
include_once __DIR__ . '/controller/ProdutoController.php';
include_once __DIR__ . '/controller/ServicoController.php';

$classe = $_GET['classe'];
$metodo = $_GET['metodo'];
$id = $_GET['id'];

if (!isset($classe) || !isset($metodo)) {
    header('Location: view/home/homepage.php');
    exit();
}

$classe .= 'Controller';

$controller = new $classe();

if (!isset($id)) {
    $controller->$metodo();
} else {
    $controller->$metodo($id);
}
