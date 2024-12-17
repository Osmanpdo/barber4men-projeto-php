<?php

class ServicoController {

    public function __construct() {}

    public function index() {
        header('Location: ../view/servico/mostrar_tudo.php');
    }

    public function show(int $id) {
        header('Location: ../view/servico/mostrar_registro.php');
    }

    public function create() {
        header('Location: ../view/servico/novo.php');
    }

    public function store() {}

    public function edit(int $id) {
        header('Location: ../view/servico/editar.php');
    }

    public function update(int $id) {}

    public function delete(int $id) {}
}

