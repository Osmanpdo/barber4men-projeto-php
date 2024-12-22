<?php

include __DIR__ . '/../Produto.php';
include __DIR__ . '/../../core/Database.php';

class ProdutoDAO {

    private Produto $produto;
    private $pdo;

    public function __construct() {
        $this->produto = new Produto('', '', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {}

    public function inserir(Produto $produto) {}

    public function bucar($id) {}

    public function alterar(Produto $produto) {}

    public function excluir(Produto $produto) {}

}
