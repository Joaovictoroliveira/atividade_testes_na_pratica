<?php

use PHPUnit\Framework\TestCase;
use Src\Operations;

class OperationsTest extends TestCase
{

    public function setUp(): void
    {
        $this->operations = new Operations();
    }

    public function testSum()
    {
        $resultSum = $this->operations->sum(10, 10);
        $this->assertEquals($resultSum, 20);
    }

    public function testSubtraction()
    {
        $resultSubtraction = $this->operations->subtraction(100, 25);
        $this->assertEquals($resultSubtraction, 75);
    }

    public function testMultiplication()
    {
        $resultMultiplication = $this->operations->multiplication(15, 20);
        $this->assertEquals($resultMultiplication, 300);
    }

    public function testDivision()
    {
        $resultDivision = $this->operations->division(1000, 200);
        $this->assertEquals($resultDivision, 5);
    }
}
