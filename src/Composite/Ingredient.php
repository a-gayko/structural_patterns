<?php

declare(strict_types=1);

namespace Patterns\Composite;

use Patterns\Composite\Interfaces\CompositeItemInterface;

class Ingredient implements CompositeItemInterface
{
    protected $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}