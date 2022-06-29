<?php

function five(string $n){
    if (strlen($n) <= 5 ){
        return true;
    }else return false;
}

print_r(array_filter(["bobby bo jangles","five","yes",7,4],"five"));