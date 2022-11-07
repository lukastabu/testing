<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\simple\simpleClass;

final class testSimple extends TestCase
{
    public function testAdd ()
    {
        $operation = new simpleClass();
        $result = $operation->add(4, 5);
        $this->assertEquals(9, $result);
    }
}