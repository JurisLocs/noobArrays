<?php

function positive($num){
    if($num > 0){
        return true;
    }
}

$numbers= [1, -4, 7, 12];
$pos = array_filter($numbers,"positive");
echo array_sum($pos) . PHP_EOL;
