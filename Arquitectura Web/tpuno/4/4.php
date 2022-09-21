<?php
   /*  echo "Method:  " .$_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo "POST";
    var_dump($_POST);
    echo "<br>";
    echo "REQUEST:  ";
    var_dump($_REQUEST);
    echo "<br>";
    echo "GET:  ";
    var_dump($_GET);
    echo "<br>"; */


    $arreglo = array("a", "b", "c", "d", "e", "f", "g", "h");

    $mostrar = count($arreglo);


    if(isset($_GET['q_elemt'])) {
        $mostrar = $_GET['q_elemt'];
    }

    echo "<ul>";
    for($i = 0; $i < $mostrar; $i++) {
        $elemento = $arreglo[$i];
        echo "<li>$elemento</li>";

    }
    echo "</ul>";
    echo "<a href = '4.php?q_elemt=2'> Mostrar 2 elementos</a> <br/>";
    echo "<a href = '4.php?q_elemt=4'> Mostrar 4 elementos</a><br/>";
    echo "<a href = '4.php?q_elemt=8'> Mostrar 8 elementos</a><br/>";
    