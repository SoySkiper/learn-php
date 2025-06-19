<?php

interface SendInterface {
    public function send();
}

interface SaveInterface {
    public function save();
}

class Document implements SendInterface, SaveInterface {
    public function send() {
        echo "Sending message\n";
    }

    public function save() {
        echo "Saving data\n";
    }
}

class BeerRepository implements SaveInterface {
    public function save() {
        echo "Saving beer data\n";
    }
}

class SaveProcess {
    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager) {
        $this->saveManager = $saveManager;
    }

    public function keep() {
        echo "Saving process started...\n";
        $this->saveManager->save();
    }
}

$beerRepository = new BeerRepository();
$document = new Document();
$saveProcess = new SaveProcess($document);
$saveProcess->keep();