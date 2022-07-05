<?php

declare(strict_types=1);

namespace Patterns\Composite;

use Patterns\Composite\Interfaces\CompositeItemInterface;
use Patterns\Composite\Interfaces\CompositeInterface;

class Order implements CompositeItemInterface
{
    private $compositePriceItem = [];
    protected $price;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(CompositeInterface $pizza) : void
    {
        $this->compositePriceItem[] = $pizza;
    }

    public function getPrice(): float
    {
        foreach ($this->compositePriceItem as $compositePriceItem) {
            $this->price += $compositePriceItem->getPrice();
        }
        return $this->price;
    }
}