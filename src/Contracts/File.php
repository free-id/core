<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface File
{
    public function __construct(
        string $path,
        string $element,
        string $attribute = 'id',
        int $id = 1,
        array $data = [],
    );

    public function find(): int;
}
