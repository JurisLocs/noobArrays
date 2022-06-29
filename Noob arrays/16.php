<?php

function even(int $n){
    if ($n % 2 == 0){
        return true;
    }else return false;
}

print_r(array_filter([5,2,8,7,4],"even"));