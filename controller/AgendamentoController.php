<?php

class AgendamentoController {

    public function __construct() {}

    public function index() {
        header('Location: ../view/agendamento/mostrar_tudo.php');
    }

    public function show(int $id) {
        header("Location: ../view/agendamento/mostrar_registro.php?id=$id");
    }

    public function create() {
        header('Location: ../view/agendamento/novo.php');
    }

    public function store() {}

    public function edit(int $id) {
        header("Location: ../view/agendamento/editar.php?id=$id");
    }

    public function update(int $id) {}

    public function delete(int $id) {}
}

