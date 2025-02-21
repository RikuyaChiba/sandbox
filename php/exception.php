<?php

interface MajinBoo {

    public function sayProfile();

    public function turnToChocolate($enemy);
}

class MajinBooEvil implements MajinBoo {

    public function sayProfile()
    {
        echo "Ore ha Majin Boo da \n";
    }

    public function turnToChocolate($enemy)
    {
        echo "{$enemy}! Choco ni nare! \n";
    }

}

class MajinBooGood implements MajinBoo {

    private const FRIEND = 'Mr. Satan';

    public function sayProfile()
    {
        echo "Boku ha Majin Boo \n";
    }

    public function turnToChocolate($enemy) 
    {
        try {
            if ($enemy === self::FRIEND) {
                throw new Exception("I can't turn " . self::FRIEND . " into chocolate!", 404);
            }
            echo "{$enemy}! Choco ni nacchae! \n";
        } catch (Exception $e) {
            echo 
                "Message: " . $e->getMessage() . "\n" . 
                "Code: " . $e->getCode() . "\n" .
                "File: " . $e->getFile() . "\n" .
                "Line: " . $e->getLine() . "\n" .
                "Trace: " . $e->getTraceAsString() . "\n";
        }
    }
}

const enemies = [
    'Dabra',
    'Chichi',
    'Bulma',
    'Kuririn',
    'Mr. Satan'
];

$boo_good = new MajinBooGood();
$boo_evil = new MajinBooEvil();

$boo_good->sayProfile();
foreach (enemies as $enemy) {
    $boo_good->turnToChocolate($enemy);
}

$boo_evil->sayProfile();
foreach (enemies as $enemy) {
    $boo_evil->turnToChocolate($enemy);
}
