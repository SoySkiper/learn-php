<?php

$sum = function (float $a, float $b): void {
    echo $a + $b;
    return;
};

$sum(1.5, 2.5); // Output: 4