<?php

namespace Src;

class Operations 
{
    public function sum(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    public function subtraction(int $num1, int $num2)
    {
        return $num1 - $num2;
    }

    public function multiplication(float $num1, float $num2)
    {
        return $num1 * $num2;
    }

    public function division(float $num1, float $num2)
    {
        return $num1 / $num2;
    }
}
