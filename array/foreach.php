<?php

$names = ['Alice', 'Bob', 'Charlie'];
$beer = [
    "name" => "Heineken",
    "alcohol" => 5.0,
    "country" => "Netherlands"
];

foreach ($names as $name) {
    echo "Hello, $name!<br>";
}


foreach ($beer as $k => $v) {
    echo $k." ".$v."<br>";
}