<?php
    function showAbout($desarrollador = null){
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <base href= "'.BASE_URL.'">
            <title>Calculadora</title>
        </head>
        <body>';






        if(isset($desarrollador)) {
            echo "<h1>Acerca de $desarrollador</h1>";
            echo "<img src='img\dev.jpg'>" ;     
            
        } else {
            echo "<h1>Este es about general: </h1>";
            
            echo "<img src='img\about.jpg'>" ;
            
            
        }
        $footer =  '
            <footer>
                <p>&copy;M.R</p>
            </footer>
            </body>
            </html>
        ';
        echo $footer;
    }

?>