<?php

namespace vitkuz573;

class GetFreeId
{
    public static function inXML($file, $element, $property = 'id')
    {
        $xml = simplexml_load_file($file);

        $id = 1;

        $elements = [];

        foreach ($xml->xpath('//' . $element . '/@' . $property) as $element) {
            $elements[] = (int) $element;
        }

        while (true) {
            if (!in_array($id, $elements)) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}