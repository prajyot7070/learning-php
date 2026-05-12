<?php

// so arrays in php are just like lists in python or objects in js 

$colors = ["red", "blue", "green"];
/**
 * this is actually like
 * 0 => red
 * 1 => blue
 * 2 => green
 */
echo $colors[1] . "\n";

// php also has associative array where we can name the keys
$names = [
    "first" => "Prajyot",
    "last" => "Mane"
];
echo $names['first'] . "\n";

//array operations
echo count($colors) . "\n";
echo array_search("blue", $colors) . "\n";
array_push($colors, "yellow");
echo count($colors) . "\n";
