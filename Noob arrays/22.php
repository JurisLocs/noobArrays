<?php

function swapCase(string $text){

    $arr = explode(" ",$text);

    array_walk($arr, function ($word, $i) use (&$w){
        if($i % 2 === 0){
            $w[$i] = strtoupper($word);
        } else {
            $w[$i] = $word;
        }

    });
    return implode(" ",$w);
}

echo swapCase("hey gurl, lets php together sometime") . PHP_EOL;