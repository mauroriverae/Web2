<?php 
    require_once "src/sections.php";
    require_once "src/calculate.php";

    // 1:40

    define('BASE_URL', '//' .$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    

    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else{
        $action = 'home'; //accion por defececto si no envian
    } 

    // calculadora/route.php?action=pi --> pi.php
    //parsea la accion Ej: suma/1/2 --> ['suma', 1, 2] --> eso es el array
    // calculadora/ 

    $params = explode('/', $action);
    

    //determina que camino seguir segun la accion 

    switch ($params[0]) {
        case 'about':
            if(isset($params[1])){
                showAbout($params[1]);
            } else{
                showAbout();
            }
            break;
        case 'sumar':
        case 'restar':
        case 'dividir':
        case 'multiplicar':
            showOperacion($params[1], $params[2], $params[0]);
        case 'pi':
            showPi();
            break; 
        case 'home':
            showHome();
            break; 
        default:
            echo('404 Page not found');
            break;
    }

 //min 49
?>