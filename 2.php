<?php


//Работа с подмассивами
//array array_slice(
//    array $array
//        int $off
//    [,int $l=NULL]
//    [, bool $keys= false]
//)

//substr()

$i = array("a", "b", "c", "d", "e", "f");

//$o = array_slice($i, 2);      // возвращает "c", "d", "e", "f"

//$o = array_slice($i, -2, 1);  // возвращает "e"

$o = array_slice($i, 0, 3);   // возвращает "a", "b", "c"
//print_r($o);

//
// обратите внимание на различия в индексах массивов php
//print_r(array_slice($i, 2, -1));//"c", "d", "e"
print_r(array_slice($i, 2, -1, true));//"c", "d", "e"

