<?php

function shoppingSpree(array $arr) {
    return $arr["price"];
}

$wishlist = [
  ["title"=> "Tesla Model S", "price"=> 90000],
  ["title"=> "Tesla Model S 2", "price"=> 90000],
  ["title"=> "Tesla Model S 3", "price"=> 90000],
  ["title"=> "Tesla Model S 4", "price"=> 90000],
];
   echo array_sum(array_map("shoppingSpree", $wishlist));

