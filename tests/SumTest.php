<?php

namespace Nazububu\Sum\Tests;

use PHPUnit\Framework\TestCase;

use Nazububu\Sum\Sum;

/**
 * Class SumTest
 *
 * @package Nazububu\Tests
 */
class SumTest extends TestCase
{
    /**
     * Test of adding two valid numbers
     *
     * @return void
     */
    public function testAddTwoNumbers(): void
    {
        $sum = new Sum;

        $this->assertEquals(2, $sum->calculate(1, 1));
    }
}
