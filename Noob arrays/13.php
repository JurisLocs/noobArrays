<?php

function total(array $arr){
    return array_sum($arr);
}

print_r(total([1,2,3,4,5]));