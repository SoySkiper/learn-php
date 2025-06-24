<?php

interface GetInfo {
    public function getInfo(): string;
}

class Address implements GetInfo {
    protected string $address;

    public function __construct(string $address)
    {
        $this->address = $address;
    }

    public function getInfo(): string
    {
        return $this->address;
    }
}

class Website implements GetInfo {
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getInfo(): string
    {
        return file_get_contents($this->url);
    }
}

function printInfo(GetInfo $site): void 
{
    echo $site->getInfo();
}

$address = new Address("Tuma malagoso, Springfield");
printInfo($address);

$website = new Website("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
printInfo($website);