<?php

use PHPUnit\Framework\TestCase;
use App\Greeter;

class GreeterTest extends TestCase
{
    public function test_helloという文字列が返される()
    {
        $greeter = new Greeter;
        $this->assertSame('hello', $greeter->sayHello());
    }
}