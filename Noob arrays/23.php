<?php

function shiftLetters (string $word) {
    $a = str_split($word);
    array_map(function ($letter){
        if($letter != "z"){
            $letter++;
            echo $letter;
        }

        return $letter;
    }, $a);
    echo PHP_EOL;
};

shiftLetters("hello");  // => 'ifmmp'
shiftLetters("abcxyz"); // => "bcdyz{"