<?php
  
  $precios = array(
        'Lapicera' => 10.50,
        'Lapiz' => 6.50,
        'Goma' => 15,
        'Cuaderno' => 145
    );

    if(isset($_GET['producto'])) {
        $producto = $_GET['producto'];

        if(isset($precios[$producto])) {
            $precio = $precios[$producto];
            echo "$ $precio "; 
        } else {
            echo "producto no existe";
        }
    } else {
        echo "indique un producto";
    }

?>