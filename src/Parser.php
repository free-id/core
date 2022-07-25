<?php

declare(strict_types=1);

namespace FreeId\Core;

use FreeId\Core\Exceptions\EmptyArrayException;

abstract class Parser
{
    /** @var array<int, int> */
    protected array $data;
    protected int $id;

    /**
     * @param array<int> $data
     */
    public function __construct(array $data, int $id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    final protected function enumerate(): int
    {
        try {
            if (empty($this->data)) {
                throw new EmptyArrayException('Elements not found!');
            }
        } catch (EmptyArrayException $e) {
            die($e->getMessage());
        }

        while (true) {
            if (! in_array($this->id, $this->data)) {
                return $this->id;
            }
            ++$this->id;
        }
    }
}
