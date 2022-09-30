<?php
require_once './app/controllers/task.controller.php';
require_once './app/controllers/userController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$taskController = new TaskController();
$userController = new UserContreller();


// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $userController->login();
        break;
    case 'list':
        $taskController->showTasks();
        break;
    case 'add':
        $taskController->addTask();
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
