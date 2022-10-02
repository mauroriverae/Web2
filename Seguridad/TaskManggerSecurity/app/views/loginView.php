<?php
    include_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

    class LoginView {
        private $smarty;

        function __construct() {
            //en nuestra arquitectura no existe una vista sin smarty
            $this->smarty = new Smarty();
        }

        function showLogin() {
            $this->smarty->assign("titulo", 'Log In');
            $this->smarty->display('templates/login.tpl');
        
        }
    }