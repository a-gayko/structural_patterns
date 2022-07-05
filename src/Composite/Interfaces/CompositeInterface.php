<?php

declare(strict_types=1);

namespace Patterns\Composite\Interfaces;

use Patterns\Composite\Interfaces\CompositeItemInterface;

interface CompositeInterface extends CompositeItemInterface
{
	public function add(CompositeItemInterface $childItem);
}