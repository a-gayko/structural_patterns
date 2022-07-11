<?php

declare(strict_types=1);

namespace Patterns\Adapter\Interfaces;

interface ReportAdapterInterface
{
    public function getData(): array;
}