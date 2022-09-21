<?php

    /* 
    Ejercicio 3
    b) liste todos los registro de la tabla en un HTML
    */
    function getPagos(){

        // 1.  conecto a la db
        $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8','root', ''); //abro conexion
        //SELECT * FROM 'pagos'

        // 2. hago la consulta SQL (2 subpasos: prepare y execute)
        $query = $db->prepare('SELECT * FROM pagos');
        $query->execute();

        //3. obtener datos de la consulata
        $pagos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve una array con todos los pagos 
        
        
        return $pagos;

    }
    
    $pagos = getPagos();
    echo "<ul>";
    foreach($pagos as $pago) {
        echo "<li> $pago->deudor </li>"; //la flecita accede a una propiedad interna del objeto
        
    }
    echo "</ul>";