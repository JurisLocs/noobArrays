<?php

function doubleNumbers($num){
    return $num ** 2;
}
$a=[1,2,3,4,5];


echo array_sum(array_map("doubleNumbers",$a)) . PHP_EOL;