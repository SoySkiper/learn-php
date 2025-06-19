<?php
declare(strict_types=1);

// $sale = new Sale(100.50, '2023-10-01');
// $sale = new Sale(100.50, '2023-10-01');
// $sale = new Sale(100.50, '2023-10-01');
// echo Sale::$count . "<br>";
// Sale::reset();
// $sale = new Sale(100.50, '2023-10-01');
// echo Sale::$count . "<br>";

$sale = new Sale('2023-10-01');
// echo gettype($sale->total) . "<br>";
// echo $sale->createInvoice();
$onlineSale = new OnlineSale('2023-10-02', 'credit card');

$concept = new Concept("cerveza", 5.5);
$concept2 = new Concept("cerveza 2", 8.2);
$sale->addConcept($concept);
$sale->addConcept($concept2);
echo $sale->getTotal() . "<br>";


// $concept = new Concept("cerveza", 5.5);
// $sale->addConcept($concept);
// print_r($sale->concepts);

class Sale{
    protected float $total;
    public string $date;
    private array $concepts;
    public static $count;

    public function __construct(string $date) {
        $this->date = $date;
        $this->total = 0.0;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept) {
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public static function reset() {
        self::$count = 0;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function __destruct() {
        //echo "Se destruye la venta de " . $this->total . " en la fecha " . $this->date;
    }

    public function createInvoice(): string {
        return "Se crea la factura " . $this->total . " en la fecha " . $this->date;
    }
}

class OnlineSale extends Sale {

    public string $paymentMethod;

    public function __construct(string $date, string $paymentMethod) {
        parent::__construct($date);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string {
        return "La venta online tiene un monto de: ".$this->total;
    }
}

class Concept{
    public string $description;
    public float|int $amount;

    public function __construct(string $description, float|int $amount) {
        $this->description = $description;
        $this->amount = $amount;
    }
}