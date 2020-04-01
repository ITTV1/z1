<?php



//Слияние массивов
//
//array array_merge(array $B1, array $B2 ...)
//
//    +
//

    $b1 = [1, 2, 3, 4];
    $b2 = [10, 20, 30, 40];
    $b = array_merge($b1, $b2);
    print_r($b);
