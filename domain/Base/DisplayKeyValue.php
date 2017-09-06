<?php

namespace Domain\Base;

class DisplayKeyValue
{
    private $key;
    private $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function key()
    {
        return $this->key;
    }

    public function value()
    {
        return $this->value;
    }
}
