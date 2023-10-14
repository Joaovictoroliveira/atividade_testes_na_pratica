<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    public function testStringStartWith()
    {
        $string = "prefix";
        $this->assertStringStartsWith("pre", $string);
    }

    public function testStringContainsString()
    {
        $string = "palavra";
        $this->assertStringContainsString("lav", $string);
    }
}
