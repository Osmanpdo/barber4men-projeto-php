<?php

class ProdutoController {

    public function __construct() {}

    public function index() {
        header('Location: ../view/produto/mostrar_tudo.php');
    }

    public function show(int $id) {
        header('Location: ../view/produto/mostrar_registro.php');
    }

    public function create() {
        header('Location: ../view/produto/novo.php');
    }

    public function store() {}

    public function edit(int $id) {
        header('Location: ../view/produto/editar.php');
    }

    public function update(int $id) {}

    public function delete(int $id) {}
}

