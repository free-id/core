<?php

declare(strict_types=1);

namespace Vitkuz573\FreeId\Tests;

use PHPUnit\Framework\TestCase;
use Vitkuz573\FreeId\Json;

final class JsonTest extends TestCase
{
    /** @test */
    public function testJson()
    {
        $free_id = new Json();
        $this->assertTrue($free_id(__DIR__.'/test.json', 'nodes') === 3);
    }
}
