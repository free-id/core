<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Parsers\File;

use Vitkuz573\FreeId\Contracts\File;

class Json implements File
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
        $json = json_decode(file_get_contents($path), true);

        $id = $start_id;

        $elements = [];

        foreach ($json[$element] as $element) {
            foreach ($element as $identifier) {
                $elements[] = (int) $identifier;
            }
        }

        while (true) {
            if (! in_array($id, $elements)) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}
