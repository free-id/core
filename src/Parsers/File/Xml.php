<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use DOMDocument;
use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Xml extends BaseParser implements File
{
    private string $path;
    private string $child_element;
    private string $attribute;

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

        foreach ($dom->getElementsByTagName($this->child_element) as $node) {
            $this->data[] = $node->getAttribute($this->attribute);
        }

        return $this->enumerate();
    }
}
