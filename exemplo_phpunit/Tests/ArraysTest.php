<?php

use PHPUnit\Framework\TestCase;

class ArraysTest extends TestCase
{
    public function testArrayHasKey()
    {
        $array = ["id" => 10, "nome" => "usuario", "email" => "usuario@email.com"];
        $this->assertArrayHasKey("id", $array);
    }

    public function testArrayContainElement()
    {
        $array = [1, 5, 10, 15, 20];
        $this->assertContains(5, $array);
    }
}