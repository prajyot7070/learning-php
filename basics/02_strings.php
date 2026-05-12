<?php
$str = "hello, world";

echo $str . "\n";

// string operations
// string concatenation
$first = "Prajyot";
$last = "Mane";
$fullname = $first . " " . $last;
echo $fullname . "\n";

// built-in functions for string operations
echo str_contains($fullname, "Prajyot") . "\n";
echo strlen($fullname) . "\n";
echo strtoupper($fullname) . "\n";
echo strtolower($fullname) . "\n";
echo strrev($fullname) . "\n";
echo str_replace("Prajyot", "Mane", $fullname) . "\n";


// also there is difference between ' and " 
echo '$fullname \n'; // this will lietrally print the variable name
echo "$fullname \n"; // here the variable value will be used


