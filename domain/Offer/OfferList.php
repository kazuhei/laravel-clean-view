<?php

namespace Domain\Offer;

class OfferList implements \IteratorAggregate
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->array);
    }

    public function count(): int
    {
        return count($this->array);
    }

    public function openCount(): int
    {
        return array_reduce($this->array, function ($sum, $offer) {
            return $offer->isOpen() ? $sum + 1 : $sum;
        }, 0);
    }
}
