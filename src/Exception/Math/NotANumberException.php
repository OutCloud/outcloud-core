<?php

namespace OutCloud\Exception\Math;

use Throwable;

/**
 * Class NotANumberException
 * @package OutCloud\Exception\Math
 */
class NotANumberException extends \Exception
{
    /**
     * NotANumberException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "NaN", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
