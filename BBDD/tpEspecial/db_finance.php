<?php
    function getfinance(){

        $db = new PDO('mysql:host=localhost;'.'dbname=db_finance;charset=utf8','root', ''); //abro conexion
        $query = $db->prepare('SELECT * FROM dbb');
        $query->execute();
        $finance = $query->fetchAll(PDO::FETCH_OBJ); // devuelve una array con todos los pagos 
        
        
        return $finance;

    }
    
    $finances = getFinance();
    echo "<ul>";
    foreach($finances as $enterprice) {
        echo "<li> $enterprice->company </li>
            <li>$enterprice->tiker</li>
            <li>$enterprice->sector</li>
            
            </br>"; //la flecita accede a una propiedad interna del objeto
        
    }
    echo "</ul>";