<?php
function doubleNumbers($num){
    return $num * 2;
}
$a=[1,2,3,4,5];
print_r(array_map("doubleNumbers",$a));