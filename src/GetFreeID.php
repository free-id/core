<?php

namespace vitkuz573;

class GetFreeID
{
    public static function inXML($file, $element, $attribute = 'id', $start_id = 1)
    {
        $xml = simplexml_load_file($file);

        $id = $start_id;

        $elements = [];

        foreach ($xml->xpath('//' . $element . '/@' . $attribute) as $element) {
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