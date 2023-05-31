<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class UniqueException extends Exception
{
    public function __construct(string $field, int $code = 0, Throwable $previous = null) {
        parent::__construct("The " . $field . " field must be unique", $code, $previous);
    }
}