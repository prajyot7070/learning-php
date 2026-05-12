<?php

//basic if else
$age = 15;

if ($age >= 18) {
    echo "under 18\n";
} elseif ($age == 18) {
    echo "just 18\n";
} else {
    echo "over 18\n";
}

// ternary operator
$result = $age >= 18 ? "Eligible" : "Not Eligible";
echo $result . "\n";

// switch
$color = "black";
switch ($color) {
    case "red":
        echo "Color is red\n";
        break;
    case "blue":
        echo "Color is blue\n";
        break;
    case "green":
        echo "Color is green\n";
        break;
    default:
        echo "Color is not red, blue, or green\n";
}

// loops

//for loop 
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}


//foreach loop
$colors = ["red", "blue", "green"];
foreach ($colors as $c) {
    echo $c . ", ";
}
echo "\n";

//while loop
while ($age > 0) {
    echo $age . ", ";
    $age--;
}
echo "\n";


//do-while loop
$counter = 10;
do {
    echo $counter . " ";
    $counter -= 1;
} while ($counter != 5);

