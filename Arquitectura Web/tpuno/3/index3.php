<?php
if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['age'] )) {
    echo("Complete todos los datos");
}
else {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    
   echo("Bienvenido " .$name . $lastname . "de " .$age);

}