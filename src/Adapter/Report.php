<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class Report
{
    public function __construct(array $reportsArray)
    {
        $this->reportsArray = $reportsArray;
    }

    public function getReports(): void
    {
        foreach($this->reportsArray as $report) {
            if ($report instanceof PHPArrayReport) {
            $object = $report;
            }
            if ($report instanceof JsonReport) {
            $object = (new JsonToPHPArrayAdapter($report));
            }
            if ($report instanceof SerializedReport) {
            $object = (new SerializedToPHPArrayAdapter($report));
            }
            var_dump($object->getData());
        }
    }
}