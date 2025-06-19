<?php

class Discount {
    protected $discount = 0;

    public function __construct($discount) {
        $this->discount = $discount;
    }

    public function getDiscount($price) {
        echo "Se aplica descuento.\n";
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount {
    const SPECIAL_DISCOUNT = 2;

    public function getDiscount($price)
    {
        echo "Se aplica descuento especial.\n";
        return parent::getDiscount($price) * self::SPECIAL_DISCOUNT;
    }
}

$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->getDiscount(150);
echo $discountAmount . "\n";