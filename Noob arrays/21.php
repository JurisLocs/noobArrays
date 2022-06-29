<?php

class votes{

}
$pplVotes = array(
    "numYoungVotes" => 0,
    "numYoungPeople"=>0,
    "numMidVotes" => 0,
    "numMidPeople"=>0,
    "numOldVotes" => 0,
    "numOldPeople"=>0,
);

function voted($names, $votes):void{
    switch ($votes){
        case (($names["age"] > 18) && ($names["age"] < 25))  :
            if ($names["voted"]){$votes["numYoungVotes"]++;}
            $votes["numYoungPeople"]++;
            break;
        case (($names["age"] > 25) && ($names["age"] < 35))  :
            if ($names["voted"]){$votes["numMidVotes"]++;}
            $votes["numMidPeople"]++;
            break;

        case (($names["age"] > 35) && ($names["age"] < 55))  :
            if ($names["voted"]){$votes["numOldVotes"]++;}
            $votes["numOldPeople"]++;
            break;

    }
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
    ],    [
        "name"=>"Anna",
        "age"=>33,
        "voted"=>false,
    ],    [
        "name"=>"Anna",
        "age"=>40,
        "voted"=>false,
    ],
];

print_r($names);
