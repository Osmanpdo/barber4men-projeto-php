<?php

include __DIR__ . '/../Cliente.php';
include __DIR__ . '/../../core/Database.php';

class ClienteDAO {

    private Cliente $cliente;
    private $pdo;

    public function __construct() {
        $this->cliente = new Cliente('', '', '', '', '', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {}

    public function inserir(Cliente $Cliente) {}

    public function bucar($id) {}

    public function alterar(Cliente $Cliente) {}

    public function excluir(Cliente $Cliente) {}

}
