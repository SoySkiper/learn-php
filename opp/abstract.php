<?php

$beer = new Beer("Cerveza Artesanal", 10.0);
echo $beer->getName() . "<br>";
echo $beer->calculatePrice() . "<br>";

showInfo($beer);

function showInfo(Product $product): void {
    echo "Producto: " . $product->getName() . "<br>";
    echo "Precio con IVA: " . $product->calculatePrice() . "<br>";
}

abstract class Product{
    protected string $name;
    protected float $price;

    // clase abstracta que define un contrato para las clases hijas
    abstract public function calculatePrice(): float;

    public function getName(): string
    {
        return $this->name;
    }
}

class Beer extends Product{
    const TAX = 0.16; // 16% de IVA

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function calculatePrice(): float
    {
        return $this->price + ($this->price * self::TAX);
    }
}
