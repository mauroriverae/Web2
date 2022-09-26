<?php
include_once 'app/controllers/task.controller.php';

include_once 'app/task.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'listar';
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$taskController = new TaskController();


// tabla de ruteo
switch ($params[0]) {
    case 'listar':
        $controller = new TaskController();
        $controller->showTasks();
        break;
    case 'insertar':
        $controller = new TaskController();
        addTask();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $taskController->deleteTask($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
