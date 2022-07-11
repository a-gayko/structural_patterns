<?php

declare(strict_types=1);

namespace Patterns\Adapter;

use Patterns\Adapter\Interfaces\ReportAdapterInterface;

class SerializedToPHPArrayAdapter implements ReportAdapterInterface
{
    public function __construct(private SerializedReport $report)
    {}

    public function getData(): array
    {
        return unserialize($this->report->getData());
    }
}