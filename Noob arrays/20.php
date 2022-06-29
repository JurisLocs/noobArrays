<?php

function flatten_array(array $arrays) {
    $new_array = array();
    array_walk_recursive($arrays, function($array) use (&$new_array) { $new_array[] = $array; });
    return $new_array;
}
$arrays = [["1", "2", "3"], [true], [4, 5, 6]];
$new_array = flatten_array($arrays);

print_r($new_array);



