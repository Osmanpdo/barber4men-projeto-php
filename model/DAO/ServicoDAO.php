<?php

include_once __DIR__ . '/../Servico.php';
include_once __DIR__ . '/../../core/Database.php';

class ProdutoDAO {

    private Servico $servico;
    private $pdo;

    public function __construct() {
        $this->servico = new Servico('', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {}

    public function inserir(Servico $servico) {}

    public function bucar($id) {}

    public function alterar(Servico $servico) {}

    public function excluir(Servico $servico) {}

}
