<?php

include __DIR__ . '/../Agendamento.php';
include __DIR__ . '/../../core/Database.php';

class AgendamentoDAO {

    private Agendamento $agendamento;
    private $pdo;

    public function __construct() {
        $this->agendamento = new Agendamento('', '', '', '', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {}

    public function inserir(Agendamento $agendamento) {}

    public function bucar($id) {}

    public function alterar(Agendamento $agendamento) {}

    public function excluir(Agendamento $agendamento) {}

}
