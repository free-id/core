<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;
use Vitkuz573\FreeId\Parsers\Parser as BaseParser;

class Xml extends BaseParser implements File
{
    /**
     * @inheritDoc
     */
    public function __invoke(
        string $path,
        string $element,
        string $attribute = 'id',
        int $start_id = 1
    ): int {
        $xml = simplexml_load_file($path);

        $id = $start_id;

        $elements = [];

        foreach ($xml->xpath('//' . $element . '/@' . $attribute) as $element) {
            $elements[] = (int) $element;
        }

        return $this->traversing($id, $elements);
    }
}
