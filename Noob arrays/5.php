<?php

function namesOnly($names){
    echo $names["name"];
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

