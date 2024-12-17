<?php

namespace Src\helper\Enum;

enum Direction: string
{
    case Left = 'left';
    case Right = 'right';

    public function operation(string $operationName): string
    {
        return $operationName . $this->name;
    }
}
