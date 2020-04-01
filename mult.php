<?php

//SORT_STRING
//SORT_NUMERCIC
//SORT_REGULAR
//SORT_DESC
//SORT_ASC



//bool array_multisort(array &$arr [, $arg [, ...[, ...]]])
# Использование функции array_multisort()
$arr1 = [5, 8, 2, 6, 3, 7];
$arr2 = ["php", "html", "css", "js", "c", "c#"];
array_multisort($arr1, $arr2);
print_r($arr1);
print_r($arr2);
?>
