<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface File
{
    public function __construct(
        string $path,
        string $element,
        string $attribute = 'id',
        int $start_id = 1,
        array $data = [],
    );

    public function find(): int;
}
