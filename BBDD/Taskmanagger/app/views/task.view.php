<?php
class TaskView {

    function showTasks($tasks) {
        include 'templates/header.php';
        include 'templates/form_alta.php';


        echo "<ul class='list-group mt-5'>";
        
        foreach($tasks as $task){
            "<li class='list-group-item'>
                $task->titulo | $task->descripcion
                <a href='eliminar' class='btn btn-danger btn-sm'>Eliminar</a>
            </li>";
        }
        echo "</ul>";

        include 'templates/footer.php';
    }

    function showError($msg) {
        echo "<h1>Error!</h1>";
        echo "<h2>$msg/h2>";
    }
}

