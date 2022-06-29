<?php

function findNeedle($arr){
    echo "found needle at " .  array_search("needle",$arr) . " position \n";
}
findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk']);