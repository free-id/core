<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Json extends BaseParser implements File
{
    private string $path;
    private string $parent_element;
    private string $attribute;

    public function __construct(
        string $path,
        string $parent_element,
        string $attribute = 'id',
        int $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->path = $path;
        $this->parent_element = $parent_element;
        $this->attribute = $attribute;
    }

    public function find(): int
    {
        foreach (json_decode(file_get_contents($this->path), true)[$this->parent_element] as $element) {
            if (array_key_exists($this->attribute, $element)) {
                $this->data[] = $element[$this->attribute];
            }
        }

        return $this->enumerate();
    }
}
