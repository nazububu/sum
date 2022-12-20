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
     * @throws SumException
     */
    public function calculate(int $firstNumber, int $secondNumber): int
    {
        $result = $firstNumber + $secondNumber;

        if (is_float($result)) {
            throw new SumException();
        }

        return $result;
    }
}
