<?php

namespace Domain\Offer\Company;

class Founded
{
    private $value;

    public function __construct(int $founded)
    {
        $this->value = $founded;
    }

    public function __toString()
    {
        return (string)$this->value . '年';
    }
}
