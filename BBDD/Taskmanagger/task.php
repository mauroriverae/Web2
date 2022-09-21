<?php
    function showHome(){
        $html ='
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <base href= "'.BASE_URL.'"/>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Task</title>
        </head>
        <body>
           <h1>Task</h1>
           
           <ul>';
                $tasks= getTasks(); //recorro el arr de tareas que me retorna el fetchAll
                foreach($tasks as $tarea) {
                    if($tarea->finalizada==1){
                        $html.= '<li><strike>'.$tarea->titulo.':'.$tarea->descripcion.' - '.'<a href="deleteTask/'.$tarea->id_tarea.'">Delete</a> - <a href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</strike></li>';
                    }else{
                        $html.= '<li> <a href="viewTask"/'.$tarea->id_tarea.'">'.$tarea->titulo.'</a> :'.$tarea->descripcion.' - '.'<a href="deleteTask/'.$tarea->id_tarea.'">Delete</a> - <a href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</li>';

                    }


                }
        $html.= 
        // .= concatena
        ' 
           </ul>
        
           <form action="createTask" method="POST">
            <input type="text" name="title" id="title">
            <input type="text" name="description" id="description">
            <input type="number" name="priority" id="priority">
            <input type="checkbox"name="done" id="done">
            <input type="submit" name="save" >
           </form>
        </body>
        </html>
        ';
        echo $html;
    }    

    function createTask(){
        if(!isset($_POST['done'])){
            $done = 0;
        }else{
            $done = 1;
        }
        insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
        header("Location: home");
    }

    function deleteTask($id){
        deleteTaskFromDb($id);
        header("Location: ".BASE_URL."home");
    }
    function updateTask($id){
        updateTaskFromDb($id);
        header("Location: ".BASE_URL."home");
    }
    function viewTask($id){
        $tarea = getTask($id);
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <base href= "'.BASE_URL.'"/>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Task</title>
        </head>
        <body>
           <h1>'.$tarea->titulo.'</h1>
           <h2>'.$tarea->descripcion.'</h2>
           <h3>'.$tarea->prioridad.'</h3>
           <h4>'.$tarea->finalizada.'</h4>
        </body>
        </html> ';
    }