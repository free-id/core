<?php

namespace vitkuz573;

class GetFreeId
{
    public static function inXML($file, $node, $property = 'id')
    {
        $xml = simplexml_load_file($file);

        $id = 1;

        while (true) {
            if (!$xml->xpath('//' . $node . '/[@' . $property . '=' . $id . ']') !== null) {
                return $id;
            }
            $id = $id + 1;
        }
    }
}