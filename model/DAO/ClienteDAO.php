<?php

include_once __DIR__ . '/../Cliente.php';
include_once __DIR__ . '/../../core/Database.php';
include_once __DIR__ . '/AgendamentoDAO.php';

class ClienteDAO {

    private AgendamentoDAO $agendamentoDAO;
    private $pdo;

    public function __construct() {
        $this->agendamentoDAO = new AgendamentoDAO();
        $this->pdo = Database::conexao();
    }

    public function listarTudo(): array {
        $sql = 'SELECT * FROM clientes';

        $stmt = $this->pdo->query($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $clientes = [];
        foreach ($result as $cliente) {
            $clientes[] = new Cliente(
                $cliente['id'],
                $cliente['nome'],
                $cliente['cpf'],
                $cliente['dt_nasc'],
                $cliente['whatsapp'],
                $cliente['logradouro'],
                $cliente['num'],
                $cliente['bairro']
            );
        }
        return $clientes;
    }

    public function inserir(Cliente $cliente): bool {
        $id = $cliente->getId();
        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $dt_nasc = $cliente->getDt_nasc();
        $whatsapp = $cliente->getWhatsapp();
        $logradouro = $cliente->getLogradouro();
        $num = $cliente->getNum();
        $bairro = $cliente->getBairro();

        $sql = 'INSERT INTO clientes (nome, cpf, dt_nasc, whatsapp, logradouro, num, bairro)
        VALUES (:nome, :cpf, :dt_nasc, :whatsapp, :logradouro, :num, :bairro)';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':bairro', $bairro);

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function bucar($id): Cliente {

        $sql = 'SELECT * FROM clientes WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $cliente) {
            return new Cliente(
                $cliente['id'],
                $cliente['nome'],
                $cliente['cpf'],
                $cliente['dt_nasc'],
                $cliente['whatsapp'],
                $cliente['logradouro'],
                $cliente['num'],
                $cliente['bairro']
            );
        }
    }

    public function alterar(Cliente $cliente): bool {
        $id = $cliente->getId();
        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $dt_nasc = $cliente->getDt_nasc();
        $whatsapp = $cliente->getWhatsapp();
        $logradouro = $cliente->getLogradouro();
        $num = $cliente->getNum();
        $bairro = $cliente->getBairro();

        $sql = 'UPDATE clientes
        SET nome = :nome, cpf = :cpf, dt_nasc = :dt_nasc, whatsapp = :whatsapp, logradouro = :logradouro, num = :num, bairro = :bairro
        WHERE id = :id';
        
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':dt_nasc', $dt_nasc);
        $stmt->bindParam(':whatsapp', $whatsapp);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':bairro', $bairro);

        if(!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function excluir(Cliente $cliente): bool {
        $id = $cliente->getId();

        // Excluir primeiro todos os agendamentos associados ao cliente
        $sql = 'SELECT * FROM agendamentos WHERE cliente_id = :id';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

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
                $agendamento['status']
            );
        }
        foreach ($agendamentos as $agendamento) {
            $this->agendamentoDAO->excluir($agendamento);
        }
        
        // Depois exclui o cliente
        $sql = 'DELETE FROM clientes WHERE id = :id';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }
}
