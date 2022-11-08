<?php

namespace App\simple;

interface simpleClassInterface
{
    public function add(float $num1, float $num2): float;

    public function subtract($num1, $num2);

    public function multiply(float $num1, float $num2): float;

    public function divide($num1, $num2);
}