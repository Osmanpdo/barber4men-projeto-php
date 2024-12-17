<?php

class CompraController {

    public function __construct() {}

    public function index() {
        header('Location: ../view/compra/mostrar_tudo.php');
    }

    public function show(int $id) {
        header('Location: ../view/compra/mostrar_registro.php');
    }

    public function create() {
        header('Location: ../view/compra/novo.php');
    }

    public function store() {}

    public function edit(int $id) {
        header('Location: ../view/compra/editar.php');
    }

    public function update(int $id) {}

    public function delete(int $id) {}
}

