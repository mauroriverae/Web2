<?php
    function showHome (){
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <base href= "'.BASE_URL.'" >
            <title>Calculadora</title>
        </head>
        <body>
            <nav class="main-nav">
                <ul class="list_main">
                    <li><a href="pi">Numero Pi</a></li>
                    <li><a href="about">Acerca de los autores</a> </li>
                    <li><a href="about/javito">about javito</a> </li>
                </ul>
            </nav>
            <main class="hero">
                <h1>Calculadora</h1>    
                <form method="GET" action="calcular.php">
                    <input type="number" name="numero1" placeholder="numero 1">
                    <select name="op" >
                        <option value="sumar">+</option>
                        <option value="restar">-</option>
                        <option value="dividir">*</option>
                        <option value="multiplicar">/</option>
                    </select>
                    <input type="number" name="numero2"  placeholder="numero 2"> 
                    <input type="Submit" class="button" value="=">
                
                </form>
            </main>
            <footer>
                <p>&copy;M.R</p>
            </footer>
        </body>
        </html>
        ';
}