<?php

namespace Nazububu\Sum\Tests;

use Nazububu\Sum\Sum;
use Nazububu\Sum\SumException;
use PHPUnit\Framework\TestCase;

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
     * @dataProvider providerAddTwoNumbers
     * @covers       Sum::calculate
     *
     * @param  int  $first
     * @param  int  $second
     * @param  int|null  $expect
     * @param  bool  $expectException
     * @return void
     * @throws SumException
     */
    public function testAddTwoNumbers(int $first, int $second, ?int $expect, bool $expectException): void
    {
        $sum = new Sum;

        if ($expectException) {
            $this->expectException(SumException::class);
        }

        $this->assertEquals($expect, $sum->calculate($first, $second));
    }

    /**
     * @return array[]
     */
    public function providerAddTwoNumbers(): array
    {
        return [
            'valid' => [
                'first' => 1,
                'second' => 2,
                'expect' => 3,
                'expectException' => false,
            ],
            'overflow' => [
                'first' => 1,
                'second' => PHP_INT_MAX,
                'expect' => null,
                'expectException' => true,
            ],
        ];
    }
}
