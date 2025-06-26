<?php

$some = function (float $a, float $b): float {
    return $a + $b;
};

function mul(float $a, float $b): float {
    return $a * $b;
};

function show(callable $func, float $a, float $b): void {
    echo $func($a, $b);
}

show($some, 2, 6); // Output: 8
echo "<br>";
show('mul', 2, 6); // Output: 12