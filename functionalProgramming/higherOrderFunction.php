<?php

$const = 5;

$some = function (float $a, float $b) use ($const): float {
    return $a + $b + $const;
};

$sum = fn (float $a, float $b): float => $a + $b;

function mul(float $a, float $b): float {
    return $a * $b;
};

function show(callable $func, float $a, float $b): void {
    echo $func($a, $b);
}

show($some, 2, 6); // Output: 8
echo "<br>";
show('mul', 2, 6); // Output: 12
echo "<br>";

// Using arrow function
show($sum, 2, 6); // Output: 8
echo "<br>";
// Using anonymous function
// show(fn (float $a, float $b): float => $a + $b, 2, 6); // Output: 8

show($some, 2, 6); // Output: 13