<?php

use PHPUnit\Framework\TestCase;
use Prajyotmane\DummyApi\Utils\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(10, 20);

        // Assert that the result is 30
        $this->assertEquals(30, $result);
    }

    public function testMultiply()
    {
        $calc = new Calculator();
        $result = $calc->multiply(5, 5);

        // Assert that the result is 25
        $this->assertEquals(25, $result);
    }
}
