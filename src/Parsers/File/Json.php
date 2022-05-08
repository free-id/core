<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Json extends BaseParser implements File
{
    private string $path;
    private string $element;
    private string $attribute;
    private int $id;
    private array $data;

    public function __construct(
        string $path,
        string $element,
        string $attribute = 'id',
        int $id = 1,
        array $data = [],
    ) {
        $this->path = $path;
        $this->element = $element;
        $this->attribute = $attribute;
        $this->id = $id;
        $this->data = $data;
    }

    public function find(): int
    {
        foreach (json_decode(file_get_contents($this->path), true)[$this->element] as $element) {
            if (array_key_exists($this->attribute, $element)) {
                $this->data[] = $element[$this->attribute];
            }
        }

        return $this->enumerate($this->data, $this->id);
    }
}
