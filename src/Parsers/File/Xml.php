<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Xml extends BaseParser implements File
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

    public function search(): int
    {
        $data = simplexml_load_file($this->path);

        $id = $this->start_id;

        $elements = [];

        foreach ($data->xpath('//' . $this->element . '/@' . $this->attribute) as $element) {
            $elements[] = (int) $element;
        }

        while (true) {
            if (! in_array($id, $elements)) {
                return $id;
            }
            $id += 1;
        }
    }
}
