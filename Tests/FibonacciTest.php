<?php

namespace Tdd;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testTheFibonacciFunction()
    {
        $fibonacci = new Fibonacci();
        $this->assertEquals(0, $fibonacci->getFib(0));
    }
}