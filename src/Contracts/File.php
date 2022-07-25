<?php

declare(strict_types=1);

namespace FreeId\Core\Contracts;

interface File
{
    public function __construct(
        string $path,
        string $element,
        string $attribute = 'id',
        int $start_id = 1,
    );

    public function find(): int;
}
