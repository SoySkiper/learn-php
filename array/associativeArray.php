<?php

$beer = [
    "name" => "Heineken",
    "alcohol" => 5.0,
    "country" => "Netherlands"
];

$beer["alcohol"] = 5.5; // Update the alcohol content

echo $beer["alcohol"]."<br>";