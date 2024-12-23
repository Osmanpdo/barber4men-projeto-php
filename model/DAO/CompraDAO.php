<?php

include_once __DIR__ . '/../Compra.php';
include_once __DIR__ . '/../../core/Database.php';

class CompraDAO {

    private Compra $compra;
    private $pdo;

    public function __construct() {
        $this->compra = new Compra('', '', '', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {}

    public function inserir(Compra $compra) {}

    public function bucar($id) {}

    public function alterar(Compra $compra) {}

    public function excluir(Compra $compra) {}

}
