<?php
//validando datos de entrada
if (empty($_POST['email']) || empty($_POST['password'])) {
    echo "<p>completa el formulario </p>";
    return; //die() corto la ejecucion 
} 

// agaarro los datos que vienen en el reques
$email = $_POST['email'];
$password = $_POST['password'];

echo "hola, $email";
echo "<br/> $password";

//simulacion, no hacer 
if ($password == "12345") {
    echo "<p> Bienvenido </p>";
} else {
    echo "<p> Password equivocado  </p>";
}





