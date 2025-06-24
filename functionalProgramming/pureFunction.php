<?php

class Counter{
    public int $count = 0;
}

$counter = new Counter();

function show(Counter $counter): string {
    $counter->count++;
    return $counter->count. "</br>";
}

function add(float $a, float $b): float {
    return $a + $b;
}

echo add(1.5, 2.5) . "</br>";
echo add(1.5, 2.5) . "</br>";
echo add(1.5, 2.5) . "</br>";
echo add(1.5, 2.5) . "</br>";

// echo show($counter);
// echo show($counter);
// echo show($counter);
// echo show($counter);

// echo $counter->count;