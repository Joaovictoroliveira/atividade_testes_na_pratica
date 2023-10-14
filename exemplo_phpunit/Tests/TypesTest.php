<?php

use PHPUnit\Framework\TestCase;

class TypesTest extends TestCase
{
    public function testTypeIsBool()
    {
        $this->assertIsBool(True);
    }

    public function testTypeIsArray()
    {
        $this->assertIsArray(["id" => 1, "nome" => "usuario", "email" => "usuario@email.com"]);
    }

    public function testTypeIsFloat()
    {
        $this->assertIsFloat(10.0);
    }
}
