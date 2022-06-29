<?php

function warnTheSheep($array){
    $wolf = array_search("wolf",$array);
    if($wolf == count($array)-1){
        echo "Pls go away and stop eating my sheep" . PHP_EOL;
    }else {
        echo "Oi! Sheep number " . count($array)-1 - $wolf .  "! You are about to be eaten by a wolf!" . PHP_EOL;
    }
}

warnTheSheep(["sheep","sheep","sheep","sheep","sheep","sheep","wolf",]);