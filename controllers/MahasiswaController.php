<?php

require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct($db) {
        $this->model = new Mahasiswa($db);
    }

    public function index() {
        $mahasiswa = $this->model->getAll();
        include __DIR__ . '/../views/mahasiswa_index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST['nama'], $_POST['nim']);
            header('Location: index.php');
            exit;
        }
        include __DIR__ . '/../views/mahasiswa_create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST['nama'], $_POST['nim']);
            header('Location: index.php');
            exit;
        }
        $data = $this->model->getById($id);
        include __DIR__ . '/../views/mahasiswa_edit.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php');
        exit;
    }
}