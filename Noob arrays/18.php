<?php

function voted($names):bool{
    if ($names["voted"]){
        return true;
    }else return false;
}
$names = [
    [
        "name"=>"Bob",
        "age"=>22,
        "voted"=>true,
    ],
    [
        "name"=>"John",
        "age"=>25,
        "voted"=>true,
    ],
    [
        "name"=>"Anna",
        "age"=>23,
        "voted"=>false,
    ],
];


print_r(count(array_filter($names,"voted")));