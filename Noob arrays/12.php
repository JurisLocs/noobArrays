<?php

function reverse(int $n){
    return array_reverse(array_map('intval', str_split($n)));
}
$a = reverse(132456);
print_r($a);

