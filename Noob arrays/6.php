<?php

function namesOnly($names){
    echo "<h1>{$names["name"]}</h1> <h2>{$names["age"]}</h2>";
}
$names = [
    [
        "name"=>"Bob",
        "age"=>22
    ],
    [
        "name"=>"John",
        "age"=>25
    ],
    [
        "name"=>"Anna",
        "age"=>23
    ],
];

array_map("namesOnly",$names);
