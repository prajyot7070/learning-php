<?php

function add($a, $b)
{
    return $a + $b;
}


//call the function

echo add(10, 20) . "\n";
// echo add("hello", "world") . "\n"; // you can pass this but it will error out
// in php we can give func params types aslo can give return types

function add2(int $a, int $b): int
{
    return $a + $b;
}
echo add2(10, 20) . "\n";

// we can also pass variable number of arguments
function add3(...$nums)
{
    return array_sum($nums);
}
echo add3(1, 2, 3) . "\n";

//passing keyword arguments 
function sub($big, $small)
{
    return $big - $small;
}
echo sub(small: 10, big: 20) . "\n"; // order doesn't matter as we have named them

// arrow functions in php is almost similar to arrow funcs in js 
$sub2 = fn($big, $small) => $big - $small;
echo "sub2 :- " . $sub2(small: 10, big: 20) . "\n";

// passing funcs as arguments
function calculate($inputs, $operation)
{
    return $operation(...$inputs);

}
echo "calculate :- " . calculate([1, 2, 3], 'add3') . "\n";

// in php we can use references too...$
function twice(int &$n): void
{
    $n *= 2;
}

$num = 10;
twice($num);
echo "after twice :- " . $num . "\n";