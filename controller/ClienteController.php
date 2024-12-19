<?php

class ClienteController {

    public function __construct() {}

    public function index() {
        header('Location: ../view/cliente/mostrar_tudo.php');
    }

    public function show(int $id) {
        header("Location: ../view/cliente/mostrar_registro.php?id=$id");
    }

    public function create() {
        header('Location: ../view/cliente/novo.php');
    }

    public function store() {}

    public function edit(int $id) {
        header("Location: ../view/cliente/editar.php?id=$id");
    }

    public function update(int $id) {}

    public function delete(int $id) {}
}

