<?php

//
//list array_slice(list &$list, int $off[, int $l [, int $r ]])
//
//    substr()

$ar = array('a' => 'apple', 'b' => 'php1', '42' => 'pear', 'f' => 'orange');
print_r(array_slice($ar, 0, 3));
print_r(array_slice($ar, 0, 3, true));

