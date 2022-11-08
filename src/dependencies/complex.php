<?php

namespace App\dependencies;

use App\simple\simpleClassInterface;

class complex
{
    public function __construct(private simpleClassInterface $simpleClass)
    {
    }

    public function calculateFinal($num1, $num2, $num3)
    {
        return ($this->simpleClass->add($num1, $this->simpleClass->multiply($num2, $num3)));
    }
}