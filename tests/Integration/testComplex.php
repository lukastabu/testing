<?php

namespace Tests\Integration;

use App\dependencies\complex;
use App\simple\simpleClass;
use PHPUnit\Framework\TestCase;

final class testComplex extends TestCase
{
    public function testCalculateFinal()
    {
        $simple = new simpleClass();
        $operation = new complex($simple);
        $result = $operation->calculateFinal(4, 5, 3);
        $this->assertEquals(19, $result);
    }
}