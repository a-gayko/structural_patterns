<?php

declare(strict_types=1);

namespace Patterns\Decorator;

use Patterns\Decorator\AbstractComputerDecorator;
use Patterns\Decorator\Interfaces\DecoratorProductInterface;

class DesctopPropertiesDecorator extends AbstractComputerDecorator
{
	public function __construct(DecoratorProductInterface $decoratedProduct)
	{
		parent::__construct($decoratedProduct);
	}

	private function getNumberOfCores() : void
	{
		echo  '8 cors' . PHP_EOL;
	}

	public function getType() : void
	{
		echo  'desktop' . PHP_EOL;
	}

	public function getProduct() : void
	{
		$this->decoratedProduct->getProduct();
		$this->getNumberOfCores();
		$this->getType();
	}
}