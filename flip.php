<?php



# Ключи и значения  и Обращение к массивам

//array array_flip(array $arr)

//list array_keys(array $arr [, mixed  $searh])
//list array_values(array $arr)
//natsort($a);
// $a= array_values($a);

//bool in_array(mixed $value , array $arr)


//  array array_count_values(list $l)

      $l= ["php", "css", "php", "js", "k"];
var_dump(array_count_values($l));
// возвращает
//
//$B = [
//    "ab" => "TV",
//    "bb" => "WWWW",
//    "cb" => "AAA",
//    "db" => "PHP"
//];
//  $B = array_flip($B);
//  print_r($B);
//  // Array([Silver]=>Joel  [Hill]=>Grant  [Mason]=>Andrew)
?>
