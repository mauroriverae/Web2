<?php
$peso = $_POST["peso"] ;
$altura = $_POST["altura"];
$imc = $peso / pow($altura,2);
$bajopeso = 18.50;
$normal = 24.99;
$sombrepeso = 25.00;
$obesidad = 30.00;
if ($imc < $bajopeso) {
    echo("Bajo peso");
} elseif($imc > $bajopeso and $imc < $normal) {
    echo("Tu imc es normal");
} elseif($imc > $normal and $imc< $obesidad) {
    echo("Tu imc da sobrepeso, visita al nutricionista");
} else {
    echo("urgente nutricionista ");
}

echo("<br/>".$imc);