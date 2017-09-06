<?php

namespace Domain\Offer\Company;

class NumberOfEmployee
{
    private $value;

    public function __construct(int $numberOfEmployee)
    {
        $this->value = $numberOfEmployee;
    }

    public function __toString()
    {
        return number_format($this->value) . '人';
    }
}
