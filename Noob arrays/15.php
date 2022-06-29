<?php

function greater(int $n){
    if ($n>=5){
        return true;
    }else return false;
}

print_r(array_filter([5,2,8,7,4],"greater"));