<?php

declare(strict_types=1);

namespace FreeId\Core\Concerns;

trait File
{
    protected string $path;
    protected string $parent_element;
    protected string $child_element;
    protected string $attribute;
}
