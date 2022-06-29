<?php

function fillArray(int $n){
    return range(0,$n-1);
}

$a = fillArray(5);

print_r($a);