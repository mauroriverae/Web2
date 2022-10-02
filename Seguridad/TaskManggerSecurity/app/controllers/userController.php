<?php
require_once './app/models/userModel.php';
require_once './app/views/loginView.php';

class UserController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function login(){
        $this->view->showLogin();
    }

}
