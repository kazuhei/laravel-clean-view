<?php

namespace Domain\Base;

class DisplayHash implements \IteratorAggregate
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public static function fromArray($array)
    {
        $keyValueArray = array_map(function ($key) use ($array) {
            return new DisplayKeyValue($key, $array[$key]);
        }, array_keys($array));

        return new DisplayHash($keyValueArray);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->array);
    }
}
