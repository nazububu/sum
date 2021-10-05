<?php

namespace Nazububu\Tests;

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
        $this->assertEquals(2, Sum::handle(1, 1));
    }
}
