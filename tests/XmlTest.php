<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Tests;

use PHPUnit\Framework\TestCase;
use Vitkuz573\FreeId\Xml;

final class XmlTest extends TestCase
{
    /** @test */
    public function testXml()
    {
        $free_id = new Xml();
        $this->assertTrue($free_id(__DIR__.'/test.xml', 'node') === 3);
    }
}
