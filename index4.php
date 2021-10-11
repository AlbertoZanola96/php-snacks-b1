<!-- Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta  -->
<?php 
    $numeri = [];
    while (count($numeri) < 15) {
        $genNumero = rand(1,100);
        if(in_array($genNumero, $numeri) === false) {
            $numeri[] = $genNumero;
        }
    }
    var_dump($numeri);
?> 
