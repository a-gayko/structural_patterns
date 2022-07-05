<?php

declare(strict_types=1);

namespace Patterns\Decorator;

use Patterns\Decorator\Interfaces\DecoratorProductInterface;

abstract class AbstractComputerDecorator implements DecoratorProductInterface
{
	protected $decoratedProduct;

	public function __construct(DecoratorProductInterface $decoratedProduct)
	{
		$this->decoratedProduct = $decoratedProduct;
	}

	public function getProduct() : void
	{
		$this->decoratedProduct->getProduct();
	}

	public function getType() : void
	{
	}
}