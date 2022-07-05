<?php

declare(strict_types=1);

namespace Patterns\Decorator;

use Patterns\Decorator\Interfaces\DecoratorProductInterface;

class Computer implements DecoratorProductInterface
{

	public function getProduct() : void
	{
		echo 'This is a computer' . PHP_EOL;
	}
}