<?php


//oid usort(array &$arr  , $callback)
//
//uasort()
//  sort()
//<=>  оператор сортировки

# Пользовательская сортировка списков php
$B = ["One", "Two", "Three", "Four", "Five"];
  usort($B, function ($a, $b) { return strcmp($a, $b); });
  print_r($B);
  //
?>
