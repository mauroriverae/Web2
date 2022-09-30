<?php
include_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class TaskView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showTasks($tasks) {
        /* include './templates/header.php';    
        include './templates/form_alta.php'; */
        
        $this->smarty->assign("tasks", $tasks);
        /* $smarty->display('templates/lista.tpl');
        $smarty->display('templates/header.tpl'); */
        $this->smarty->display('templates/lista.tpl');

    }
}
