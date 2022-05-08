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
    private int $start_id;

    public function __construct(
        string $path,
        string $element,
        string $attribute = 'id',
        int $start_id = 1
    ) {
        $this->path = $path;
        $this->element = $element;
        $this->attribute = $attribute;
        $this->start_id = $start_id;
    }

    public function find(): int
    {
        $id = $this->start_id;

        $data = [];

        foreach (json_decode(file_get_contents($this->path), true)[$this->element] as $element) {
            if (array_key_exists($this->attribute, $element)) {
                $data[] = $element[$this->attribute];
            }
        }

        return $this->enumerate($data, $id);
    }
}
