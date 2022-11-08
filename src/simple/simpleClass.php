<?php

namespace App\simple;

class simpleClass implements simpleClassInterface
{
    public function add(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiply(float $num1, float $num2): float
    {
        return $num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        return $num1 / $num2;
    }
}