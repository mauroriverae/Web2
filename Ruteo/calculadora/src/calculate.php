<?php
    
    function showOperacion($nuumero1, $numero2, $op) {
        require_once('operations.php'); //requiere el archivo pero una sola vez
            if(isset($numero1) && isset($numero2) && isset($op)) {
                switch ($op) {
                    case 'sumar':
                        $resultado = sumar($numero1, $numero2);
                        $simbolo = "+";
                        break;
                    case 'dividir':
                        $resultado = dividir($numero1, $numero2);
                        $simbolo = "/";
                        break;
                    case 'multiplicar':
                        $resultado = multiplicar($numero1, $numero2);
                        $simbolo = "/";
                        break;
                    case 'restar':
                        $resultado = restar($numero1, $numero2);
                        $simbolo = "-";
                        break;
                    
                    default:
                        $resultado = "op in";
                        $simbolo = "??";
                        break;
                }
            } 
            else{
                echo "NOOOO";
            }
    }

    
