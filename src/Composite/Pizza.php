<?php

declare(strict_types=1);

namespace Patterns\Composite;

use Patterns\Composite\Interfaces\CompositeInterface;
use Patterns\Composite\Interfaces\CompositeItemInterface;

class Pizza implements CompositeInterface
{
    private $compositePriceItem = [];
    protected $price;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(CompositeItemInterface $ingredient) : void
    {
        $this->compositePriceItem[] = $ingredient;
    }

    public function getPrice(): float
    {
        foreach ($this->compositePriceItem as $compositePriceItem) {
            $this->price += $compositePriceItem->getPrice();
        }
        return $this->price;
    }
}