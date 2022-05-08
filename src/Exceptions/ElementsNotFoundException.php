<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Exceptions;

use Exception;
use Throwable;

class ElementsNotFoundException extends Exception
{
    public function __construct(
        string $message = "Elements not found!",
        int $code = 0,
        ?Throwable
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
