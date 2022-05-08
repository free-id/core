<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Tests;

use PHPUnit\Framework\TestCase;
use Vitkuz573\FreeId\Parsers\File\Xml;

final class XmlTest extends TestCase
{
    /** @test */
    public function testXml()
    {
        $free_id = new Xml(__DIR__.'/files/test.xml', 'node');
        $this->assertTrue($free_id->find() === 3);
    }
}
