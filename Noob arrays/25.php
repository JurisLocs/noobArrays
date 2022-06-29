<?php

function  isPresent ($str, $target) {
    $str = str_split($str);
    if(array_search($target,$str)){
        echo "true" .PHP_EOL;
    }
    else echo "false" . PHP_EOL;
};

isPresent("abcd", "b"); // => true
isPresent("efghi", "a"); // => false