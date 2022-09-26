<?php
class TaskModel{
    private function conectToDb(){
        //me conecto a la DB
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', ''); //queryString trae el nombre de la bd, host, nombre, etc
        return $db;
    }

    function getTasks() {
        $db =  $this->conectToDb();
        //preparo la sentencia 
        $query = $db -> prepare('SELECT * FROM tareas');
        $query -> execute();  //con la flechita llamaos a la funcion
        $task = $query->fetchAll(PDO::FETCH_OBJ); // accedo al objeto de manera mas facil -->
        return $task;
    }

    function insertTask($titulo, $descripcion, $prioridad) {
        $db = $this->conectToDb();
        $query = $db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad) VALUES (?, ?, ?)"); //pido los dato que van a ser insertados
        //4 signos de preguntas igual a 4 preguntas en todos los lugar, si pongo mas o mens tira error
        $query->execute(array($mermelada, $descripcion, $prioridad)); //ejecute la sentencia
        return $db->lastInsrtid();
    }

}