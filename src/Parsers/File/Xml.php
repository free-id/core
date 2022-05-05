<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;

class Xml implements File
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

        while (true) {
            if (! in_array($id, $elements)) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}
