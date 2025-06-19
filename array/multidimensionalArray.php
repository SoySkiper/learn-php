<?php

$beers = [
    [
        "name" => "Heineken",
        "alcohol" => 5.0,
        "country" => "Netherlands"
    ],
    [
        "name" => "Budweiser",
        "alcohol" => 5.0,
        "country" => "USA"
    ],
    [
        "name" => "Corona",
        "alcohol" => 4.6,
        "country" => "Mexico"
    ]
];

echo $beers[0]["name"]."<br>";

foreach ($beers as $beer) {
    echo "Name: ".$beer["name"]."<br>";
    echo "Alcohol: ".$beer["alcohol"]."%<br>";
    echo "Country: ".$beer["country"]."<br><br>";
}

foreach($beers as $beer) {
    foreach ($beer as $k => $v) {
        echo "$k: $v<br>";
    }
    echo "<br>";
}