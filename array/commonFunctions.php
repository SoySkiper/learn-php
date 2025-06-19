<?php

$beers = [
    "Victoria",
    "Corona",
    "Modelo",
];

$beers2 = [
    "Leon",
    "Estrella",
    "Negra Modelo"
];


$beerMixed = array_merge($beers, $beers2);
print_r($beerMixed);


echo count($beers) . " beers in the array.</br>";

array_push($beers, "Budweiser", "Heineken", "Coors");

echo count($beers) . " beers in the array.</br>";


$beer = array_pop($beers); // Remove the last beer from the array and save it to $beer
print_r($beers);
echo $beer . " has been removed from the array.</br>";

if(in_array("Corona", $beers)) {
    echo "Corona is in the array.</br>";
} else {
    echo "Corona is not in the array.</br>";
}