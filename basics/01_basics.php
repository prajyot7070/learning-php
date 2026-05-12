<?php

// Variables & Data types
$name = "Prajyot"; //string
$age = 22; //integer
$height = 5.11; //float
$hobbies = ["coding", "reading", "swimming", "biking"]; //array

// we cannot mention explicit types for local variables in php.
// string $name = 'prajyot' is not valid
// we can ensure types for local variables by enforcing a type cast
$address = (string) "Maharashtra, India";
$weight = (int) "80"; // this would convert it into int


// Type Casting
$a = (int) "10"; //str -> int
$b = (float) $a; //int -> float
$c = (array) $b; //int -> array
$d = (string) $b; //int -> string

echo "\$a: $a\n";
echo "\$b: $b\n";
echo "\$c: ";
foreach ($c as $value) {
    echo $value;
}
echo "\n";
echo "d: $d\n";

//some weird behaviour of type casting
$e = (bool) "true";
$e1 = (bool) "false";
$f = (bool) 1;
$g = (bool) 0;
$h = (bool) -1;

echo "\$e: $e \n";
echo "\$e1: $e1 \n";
echo "\$f: $f \n";
echo "\$g: $g \n";
echo "\$h: $h \n";



