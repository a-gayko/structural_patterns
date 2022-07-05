<?php

declare(strict_types=1);

namespace Patterns\Composite\Interfaces;

interface CompositeItemInterface
{
	public function getPrice() : float;
}