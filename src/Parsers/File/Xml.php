<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Xml extends BaseParser implements File
{
    private string $path;
    private string $child_element;
    private string $attribute;
    private int $id;
    private array $data;

    public function __construct(
        string $path,
        string $child_element,
        string $attribute = 'id',
        int $start_id = 1,
        array $data = [],
    ) {
        $this->path = $path;
        $this->child_element = $child_element;
        $this->attribute = $attribute;
        $this->id = $start_id;
        $this->data = $data;
    }

    public function find(): int
    {
        $this->data = simplexml_load_file($this->path)->xpath('//' . $this->child_element . '/@' . $this->attribute);

        return $this->enumerate($this->data, $this->id);
    }
}
