<?php

function stringConcat(array $arr){
    return implode($arr);
}

print_r(stringConcat([5,2,8,7,4]));