<?php

namespace Kjelyazkov\TreeStructure;

class Tree
{
    public array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public static function load(array $array)
    {
        $instance = new static($array);

        return $instance;
    }
}
