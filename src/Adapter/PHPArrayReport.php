<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class PHPArrayReport
{
    public function getData(): array
    {
        return [
            'key_one' => 'value_one',
            'key_two' => 'value_two',
            'key_three' => 'value_three',
            'key_four' => 'value_four',
            'key_five' => [
                'value_five' => 'value_five',
                'value_six' => 'value_six',
                'value_seven' => 'value_seven',
                ]
        ];
    }
}