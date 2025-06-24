<?php

$beer = new stdClass();

$beer->name = "Heineken";
$beer->alcohol = 5.0;

//necho $beer->name;

$arr = (array) $beer;

// echo $arr['name'];

$arrLocation = [
    'city' => 'Amsterdam',
    'country' => 'Netherlands'
];

$objLocation = (object) $arrLocation;

echo $objLocation->city . ", " . $objLocation->country;

print_r($objLocation);