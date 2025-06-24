<?php

$beer = new Beer("Heineken", "Heineken N.V.", 5.0, false);

// De objeto a JSON
$json = json_encode($beer);
//echo $json;

$jsonBeer = '{"name":"Heineken","brand":"Heineken N.V.","alcohol":5.0,"isStrong":false}';
// De JSON a objeto
$objBeer = json_decode($jsonBeer);

//echo $objBeer->name; // Heineken


// Array a JSON

$arr = [
    "name" => "Heinekén",
    "brand" => "Heineken N.V.",
    "alcohol" => 5.0,
    "isStrong" => false
];

$jsonArr = json_encode($arr);
//echo $jsonArr; // {"name":"Heineken","brand":"Heineken N.V.","alcohol":5.0,"isStrong":false}

// JSON a Array. Se agrega true para que se convierta a un array asociativo
// Si no se agrega, se convierte a un objeto
$arrBeer = json_decode($jsonArr, true);
echo $arrBeer['alcohol']; // 5.0


class Beer
{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct($name, $brand, $alcohol, $isStrong)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}
