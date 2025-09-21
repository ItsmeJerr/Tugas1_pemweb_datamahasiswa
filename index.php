<?php
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/controllers/MahasiswaController.php';

$controller = new MahasiswaController($db);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($id) $controller->edit($id);
        break;
    case 'delete':
        if ($id) $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}