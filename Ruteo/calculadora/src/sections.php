<?php 
    function showHome (){
        include_once "templates/header.php";
        echo '
            <main class="hero">
                <h1>Calculadora</h1>    
                <form id="form-calc" method="GET">
                    <input type="number" name="numero1" placeholder="numero 1">
                    <select name="op" >
                        <option value="sumar">+</option>
                        <option value="restar">-</option>
                        <option value="dividir">*</option>
                        <option value="multiplicar">/</option>
                    </select>
                    <input type="number" name="numero2"  placeholder="numero 2"> 
                    <input type="Submit" class="button" value="=">
                    <span id="resultado"></span>
                </form>
            </main>
        ';
        include_once "templates/footer.php";
    }

    function showPi(){
        include_once "templates/header.php";
        $pi  = M_PI;
        echo  "<h1>Aca elnumero pi</h1>";
        echo "<p>PI = $pi</p>"; 
        include_once "templates/footer.php";
    }

    function showAbout($desarrollador = null){
        include_once "templates/header.php";
        if(isset($desarrollador)) {
            echo "<h1>Acerca de $desarrollador</h1>";
            echo "<img src='img\dev.jpg'>" ;     
            
        } else {
            echo "<h1>Este es about general: </h1>";
            
            echo "<img src='img\about.jpg'>" ;

        }
        include_once "templates/footer.php";
    }
