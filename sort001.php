<?php #

## Сортировка списков (случай ассоциативного массива) php
$B = [
    "a" => "TV",
    "b" => "WWWW",
    "c" => "AAA",
    "d" => "PHP"
];
  sort($B);
  print_r($B);
  //Array ( [0] => AAA [1] => PHP [2] => TV [3] => WWWW )
?>
