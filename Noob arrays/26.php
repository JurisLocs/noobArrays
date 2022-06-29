<?php

function countSheep(array $array){
    $sheep = array_map(function ($value){
        if($value){
            return $value;
        }
    },$array);
    return array_sum($sheep);

}

$arr = [
    true,
    true,
    true,
    false,
    true,
    true,
    true,
    true,
    true,
    false,
    true,
    false,
    true,
    false,
    false,
    true,
    true,
    true,
    true,
    true,
    false,
    false,
    true,
    true,
];
echo countSheep($arr) . PHP_EOL;