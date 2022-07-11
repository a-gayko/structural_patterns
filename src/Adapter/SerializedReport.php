<?php

declare(strict_types=1);

namespace Patterns\Adapter;

class SerializedReport
{
    public function getData(): string
    {
        $array = [
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
        return serialize($array);
    }
}