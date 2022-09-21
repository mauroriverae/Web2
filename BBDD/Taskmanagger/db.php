<?php

    function conectToDb(){
        //me conecto a la DB
        return new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', ''); //queryString trae el nombre de la bd, host, nombre, etc
    }
    function getTasks() {
        $db = conectToDb();
        //preparo la sentencia 
        $sentencia = $db -> prepare("select * from tareas");
        $sentencia -> execute();  //con la flechita llamaos a la funcion
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ); // accedo al objeto de manera mas facil -->
        return $tareas;
    }
    function getTask($id) {
        $db = conectToDb();
        //preparo la sentencia 
        $sentencia = $db -> prepare("select * from tareas WHERE id_tarea=?");
        $sentencia -> execute(array($id));  
        $tarea = $sentencia->fetchAll(PDO::FETCH_OBJ); // uso fetch porque trae una sola  
        return $tarea;
    }

    function insertTask($mermelada, $descripcion, $prioridad, $finalizada){
        $db = conectToDb();
        $sentencia = $db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?, ?)"); //pido los dato que van a ser insertados
        //4 signos de preguntas igual a 4 preguntas en todos los lugar, si pongo mas o mens tira error
        $sentencia->execute(array($mermelada, $descripcion, $prioridad, $finalizada)); //ejecute la sentencia
    }


    function deleteTaskFromDb($id){
        $db = conectToDb();
        $sentencia = $db->prepare("DELETE FROM tareas WHERE id_tarea=?"); //inyeccion de dependecia BRO
        $sentencia->execute(array($id));
    }
    

    function updateTaskFromDb($id) {
        $db = conectToDb();
        $sentencia = $db->prepare("UPDATE  tareas SET finalizada=1 WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }
    