<?php

function positive($num){
    if($num > 0){
        return true;
    }
}
function negative($num){
    if($num < 0){
        return $num;
    } else return 0;
}

$numbers= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

$x =count(array_filter($numbers,"positive"));

$y = array_sum(array_map("negative",$numbers));

echo "[$x,$y]" . PHP_EOL;

