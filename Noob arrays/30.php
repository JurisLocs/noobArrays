<?php

function monkeyCount($num){
    $arr = range(1,$num);
    return $arr;
}
print_r(monkeyCount(10));