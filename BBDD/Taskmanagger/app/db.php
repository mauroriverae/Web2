<?php

  
  
    function getTask($id) {
        $db = conectToDb();
        //preparo la sentencia 
        $sentencia = $db -> prepare("select * from tareas WHERE id_tarea=?");
        $sentencia -> execute(array($id));  
        $tarea = $sentencia->fetchAll(PDO::FETCH_OBJ); // uso fetch porque trae una sola  
        return $tarea;
    }



    function removeTask($id){
        $db = conectToDb();
        $query = $db->prepare("DELETE FROM tareas WHERE id_tarea=?"); //inyeccion de dependecia BRO
        $query->execute([$id]);
    }
    

    function updateTaskFromDb($id) {
        $db = conectToDb();
        $query = $db->prepare("UPDATE  tareas SET finalizada=1 WHERE id_tarea=?");
        $query->execute([$id]);
    }
    