<?php
 echo "Sequência de Fibonacci: ";
    $numero1 = 0;
    $numero2 = 1;
    echo $numero1 . " ";
    echo $numero2 . " ";
    for ($i = 2; $i < 10; $i++) {
        $proximo = $numero1 + $numero2;
        echo $proximo . " ";
        $numero1 = $numero2;
        $numero2 = $proximo;
    }
?>