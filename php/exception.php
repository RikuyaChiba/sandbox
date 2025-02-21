<?php

interface MajinBoo {
    public function turnToChocolate($enemy);
}

class MajinBooGood implements MajinBoo {
    private const FRIEND = 'Mr. Satan';

    public function turnToChocolate($enemy) 
    {
        try {
            if ($enemy === self::FRIEND) {
                throw new Exception("I can't turn " . self::FRIEND . " into chocolate!", 404);
            }
            echo "{$enemy}! Choco ni nacchae!";
        } catch (Exception $e) {
            echo 
                "Message: " . $e->getMessage() . "\n" . 
                "Code: " . $e->getCode() . "\n" .
                "File: " . $e->getFile() . "\n" .
                "Line: " . $e->getLine() . "\n" .
                "Trace: " . $e->getTraceAsString();
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

$boo = new MajinBooGood();

foreach (enemies as $enemy) {
    $boo->turnToChocolate($enemy);
    echo "\n";
}
