<?php 
    require_once("db.php");
    require_once("task.php");

    define('BASE_URL', '//' .$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else{
        $action = 'home'; // accion por defececto si no envian
    } 


    $params = explode('/', $action);
    


    switch ($params[0]) {
        case 'home':
            showHome();
            break; 
        case 'createTask':
            createTask();
            break; 
        case 'deleteTask':
            deleteTask($params[1]);
            break; 
        case 'updateTask':
            updateTask($params[1]);
            break; 
        case 'viewTask':
            viewTask($params[1]);
            break; 
        default:
            echo('404 Page not found');
            break;
    }

