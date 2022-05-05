<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Contracts;

interface File
{
    /**
     * Get free ID in the file
     */
    public function __invoke(string $path, string $element, string $attribute = 'id', int $start_id = 1): int;
}
