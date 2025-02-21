<?php

class Saiyan {
    public $power = 100;
    protected $health = 100;
    private $ki = 100;

    public function sayProfile() {
        echo "Power: {$this->power}, Health: {$this->health}, Ki: {$this->ki}";
    }
}

$saiyan = new Saiyan();
$saiyan->sayProfile();

echo $saiyan->power;
// echo $saiyan->health; -> fatal error
// echo $saiyan->ki; -> fatal error

class Goku extends Saiyan {
    public $power = 200;
    protected $health = 200;

    public function sayProfile() {
        echo "Power: {$this->power}, Health: {$this->health}, Ki: {$this->ki}";
    }
}

$goku = new Goku();
$goku->sayProfile();

echo $goku->power;
// echo $goku->health; -> fatal error
// echo $goku->ki; -> fatal error
