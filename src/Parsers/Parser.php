<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers;

class Parser
{
    protected array $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    protected function enumerate(array $data, int $id): int
    {
        foreach ($data as $element) {
            $this->elements[] = (int) $element;
        }

        while (true) {
            if (! in_array($id, $this->elements)) {
                return $id;
            }
            $id += 1;
        }
    }
}
