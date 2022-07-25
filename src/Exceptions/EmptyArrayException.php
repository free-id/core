<?php

declare(strict_types=1);

namespace Vitkuz573\FreeIdCore\Exceptions;

use Throwable;

class EmptyArrayException extends BaseException
{
    public function __construct(
        string $message = "The array is empty!",
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
