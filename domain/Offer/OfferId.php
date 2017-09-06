<?php

namespace Domain\Offer;

class OfferId
{
    private $value;

    public function __construct(int $id)
    {
        $this->value = $id;
    }

    public function rawValue(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value;
    }
}
