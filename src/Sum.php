<?php

namespace Nazububu\Sum;

/**
 * Class Sum
 *
 * @package Nazububu\Sum
 */
class Sum
{
    /**
     * Handling the addition of two numbers
     *
     * @param  int  $firstNumber
     * @param  int  $secondNumber
     *
     * @return int
     */
    public static function handle(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
