<!-- Lista en forma dinamica -->
<h3>Ejercicio 1</h3>
<?php
/* esta parte es interpretada por el servidor */
    echo('<ul>'); //echo emite la salida
        for($i = 0; $i <10; $i++){
            echo('<li>');
            echo($i);
            echo('</li>');
        }

    echo('</ul>');
?>
<h3>Ejercicio 1.a</h3>
<?php 
    echo('<ul>'); //echo emite la salida
        for($i = 20; $i >10; $i--)
        {
            $cadena = "<li>$i<li>";
            echo($cadena);
        }
    echo('</ul>');
?>


<h3>Estatico</h3>
<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
</ul>


<!-- el archivo php si no tiene codigo php es interpretado como HtML -->