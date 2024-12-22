<?php

include __DIR__ . '/../Agendamento.php';
include __DIR__ . '/../../core/Database.php';

class AgendamentoDAO {

    private Agendamento $agendamento;
    private $pdo;

    public function __construct() {
        $this->agendamento = new Agendamento(0, 0, 0, '', '', '', '');
        $this->pdo = Database::conexao();
    }

    public function listarTudo() {
        $sql = 'SELECT * FROM agendamentos';
        $stmt = $this->pdo->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $agendamentos = [];
        foreach ($result as $agendamento) {
            $agendamentos[] = new Agendamento(
                $agendamento['id'],
                $agendamento['cliente_id'],
                $agendamento['servico_id'],
                $agendamento['data'],
                $agendamento['horario'],
                $agendamento['duracao'],
                $agendamento['status']);
        }
        return $agendamentos;
    }

    public function inserir(Agendamento $agendamento) {
        $cliente_id = $agendamento->getCliente_id();
        $servico_id = $agendamento->getServico_id();
        $data = $agendamento->getData();
        $horario = $agendamento->getHorario();
        $duracao = $agendamento->getDuracao();
        $status = $agendamento->getStatus();

        $sql = 'INSERT INTO agendamentos (cliente_id, servico_id, data, horario, duracao, status)
        VALUES(:cliente_id, :servico_id, :data, :horario, :duracao, :status)';
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->bindParam(':servico_id', $servico_id);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':duracao', $duracao);
        $stmt->bindParam(':status', $status);

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function bucar($id) {
        $sql = 'SELECT * FROM agendamentos WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            echo 'Erro ao encontrar id!';
            return;
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $agendamento) {
            return new Agendamento(
                $agendamento['id'],
                $agendamento['cliente_id'],
                $agendamento['servico_id'],
                $agendamento['data'],
                $agendamento['horario'],
                $agendamento['duracao'],
                $agendamento['status']);
        }
    }

    public function alterar(Agendamento $agendamento) {
        $id = $agendamento->getId();
        $cliente_id = $agendamento->getCliente_id();
        $servico_id = $agendamento->getServico_id();
        $data = $agendamento->getData();
        $horario = $agendamento->getHorario();
        $duracao = $agendamento->getDuracao();
        $status = $agendamento->getStatus();

        $sql = 'UPDATE agendamentos
        SET cliente_id = :cliente_id, servico_id = :servico_id, data = :data, horario = :horario, duracao = :duracao, status = :status
        WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->bindParam(':servico_id', $servico_id);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':horario', $horario);
        $stmt->bindParam(':duracao', $duracao);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function excluir(Agendamento $agendamento) {
        $id = $agendamento->getId();
        $sql = 'DELETE FROM agendamentos WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            echo false;
        }
        return true;
    }

}
