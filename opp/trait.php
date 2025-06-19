<?php

trait EmailSender {
    public function sendEmail() {
        echo "Sending email...\n";
    }
}

trait DB{
    public function save() {
        echo "Saving to database...\n";
    }
}

trait Log{
    protected function log( string $message, string $fileName) {
        if(!file_exists($fileName)) {
            file_put_contents($fileName, "");
        }
        
        $current = file_get_contents($fileName);
        $current .= date('Y-m-d H:i:s'). " - " . $message . "\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice {
    use EmailSender, DB, Log;

    public function create() {
        echo "Creating invoice...\n";
        $this->log("Se creó la factura", "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();