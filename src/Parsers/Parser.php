<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

class Parser
{
    protected function traversing(int $id, array $elements): int
    {
        while (true) {
            if (! in_array($id, $elements)) {
                return $id;
            }
            $id += 1;
        }
    }
}
