<?php
include_once 'app/models/task.model.php';
include_once 'app/views/task.view.php';

    class TaskController{

        private $model;
        private $view;

        function __construct() {
            $this->model = new TaskModel();
            $this->view=  new TaskView();
        } 

        function showTasks(){
            
            //contieen las tares del model
            $tasks = $this->model->getTasks();

           //actualizo la vizta
           $this->view->showTasks($tasks);
        }

        function addTask(){
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $prioridad = $_POST['prioridad'];
    
            if(empty($titulo)|| empty($prioridad)){
                $this->view->showError("Faltan datos obligatorios");
                die();
            }

            $id = $this->model->insertTask($titulo, $descripcion, $prioridad);
            header("location: " . BASE_URL);
        }
        
        function deleteTask($id) {
            $this->model->removeTask($id);
            header("Location: " . BASE_URL);
        } 
    }