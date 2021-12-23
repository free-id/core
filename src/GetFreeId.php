<?php

namespace vitkuz573;

class GetFreeId
{
    public static function inXML($file, $node, $property = 'id')
    {
        $xml = simplexml_load_file($file);

        $id = 1;

        $items = null;

        foreach ($xml->xpath('//' . $node . '/@' . $property) as $item) {
            $items[] = (int) $item;
        }

        while (true) {
            if (!in_array($id, $items)) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}