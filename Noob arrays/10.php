<?php
function numbers($num){
    $a = sqrt($num);
    if($a == floor($a)){
        return sqrt($num);
    }else
    return $num ** 2;
}

$arr = [4, 3, 9, 7, 2, 1];
print_r(array_map("numbers",$arr));