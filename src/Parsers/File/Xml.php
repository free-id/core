<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use DOMDocument;
use Vitkuz573\FreeId\Concerns\File;
use Vitkuz573\FreeId\Contracts\File as FileContract;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Xml extends BaseParser implements FileContract
{
    use File;

    public function __construct(
        string $path,
        string $child_element,
        string $attribute = 'id',
        int $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->path = $path;
        $this->child_element = $child_element;
        $this->attribute = $attribute;
    }

    public function find(): int
    {
        $dom = new DOMDocument();
        $dom->load($this->path);

        foreach ($dom->getElementsByTagName($this->child_element) as $element) {
            $this->data[] = (int) $element->getAttribute($this->attribute);
        }

        return $this->enumerate();
    }
}
