<?php

declare(strict_types=1);

namespace Patterns\Adapter;

use Patterns\Adapter\Interfaces\ReportAdapterInterface;

class JsonToPHPArrayAdapter implements ReportAdapterInterface
{
    public function __construct(private JsonReport $report)
    {}

    public function getData(): array
    {
        return json_decode($this->report->buildJson(), true);
    }
}