<?php

namespace Nazububu\Sum;

use Exception;
use Throwable;

/**
 * Class SumException
 *
 * @package Nazububu\Sum
 */
final class SumException extends Exception
{
    /**
     * @param $message
     * @param $code
     * @param  Throwable|null  $previous
     */
    public function __construct($message = 'Overflow error', $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
