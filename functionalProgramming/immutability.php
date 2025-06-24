<?php

class Location{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function move(float $x, float $y): Location {
        $location = new Location($this->x + $x, $this->y + $y);
        return $location;
    }

}

$location = new Location(10.0, 20.0);

$newLocation = $location->move(5.0, -3.0);

echo $location->getX() . ", " . $location->getY() . "\n"; // 10.0, 20.0
echo $newLocation->getX() . ", " . $newLocation->getY() . "\n"; // 15.0, 17.0