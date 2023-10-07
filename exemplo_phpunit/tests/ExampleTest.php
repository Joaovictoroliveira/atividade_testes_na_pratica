<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function testAddition()
    {
        $this->assertEquals(4, 2 + 2);
        $this->assertEquals(10, 9 + 1);
        $this->assertEquals(20, 15 + 5);
        $this->assertEquals(100, 50 + 50);
    }
}
