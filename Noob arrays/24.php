<?php

function countLetters (string $word) {
    $word = str_split($word);
    $arr = array_count_values($word);
    print_r($arr);
}

countLetters("abbcccddddeeeee"); // => {a:1, b:2, c:3, d:4, e:5}